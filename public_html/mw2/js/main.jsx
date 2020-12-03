"use strict";

var SearchView = React.createClass({
  submitted: function() {
    var form = this.refs.searchForm;
    var query = form.querySelector("#query").value;
    if (!query.trim()) {
      return ; };
    var options = {
      token_lemma: form.querySelector("input[name=token_lemma]").checked,
      content_words_only: form.querySelector("input[name=content_words_only]").checked,
      all_hits: form.querySelector("input[name=all_hits]").checked
    };

    this.props.onSubmit(query, options);
  },

  componentDidMount: function() {
    this.refs.searchForm.querySelector('#query').focus();
  },

  formSubmit: function(event) {
    event.preventDefault();
    this.submitted();
  },

  toggleLemma: function(event) {
    var checkbox = this.refs.searchForm.querySelector('input[name=token_lemma]');
    checkbox.checked = !checkbox.checked;
    this.submitted();
  },

  toggleContentWords: function(event) {
    var checkbox = this.refs.searchForm.querySelector('input[name=content_words_only]');
    checkbox.checked = !checkbox.checked;
    this.submitted();
  },
  allHits: function(event) {
    var checkbox = this.refs.searchForm.querySelector('input[name=all_hits]');
    checkbox.checked = !checkbox.checked;
    this.submitted();
  },

  changedQuery: function(event) {
    this.props.onQueryChange(event.target.value);
  },

  render: function() {
    return (
      <div className="searchView">
        <form action="" ref="searchForm" method="" onSubmit={this.formSubmit}>
          <div className="search-wrapper card">
            {!!this.props.inputLanguage &&
              <FlagView lang={this.props.inputLanguage} />
            }
            <input autoComplete="off" id="query" value={this.props.query} onChange={this.changedQuery} />
            <i onClick={this.submitted} className="search-icon material-icons">search</i>
          </div>
          <div className="options card">
            <LanguageSelector
              onSelectLanguage={this.props.onChangeInputLanguage}
              inputLanguage={this.props.inputLanguage}
              languagesAvailable={this.props.languagesAvailable}
              languageNames={this.props.languageNames}
              autoDetectInputLanguage={this.props.autoDetectInputLanguage} />
            <input type="checkbox" className="filled-in" name="token_lemma" id="chb_tl" onChange={this.submitted} checked={this.props.options.token_lemma} /><label title="Automatically determine base form" onClick={this.toggleLemma} for="chb_tl">Convert to lemmas</label>
            <input type="checkbox" className="filled-in" name="content_words_only" id="chb_cwo" onChange={this.submitted} checked={this.props.options.content_words_only} /><label title="Restrict search to content words" onClick={this.toggleContentWords} for="chb_cwo">Only content words</label>
            <input type="checkbox" className="filled-in" name="all_hits" id="chb_all" onChange={this.submitted} checked={this.props.options.all_hits} /><label title="Search for more than 1000 hits (and wait accordingly)." onClick={this.allHits} for="chb_all">Get all results</label>
          </div>
        </form>
      </div>
    );
  }
});

var FlagView = React.createClass({
  render: function() {
    return <img src={'img/flags/' + this.props.lang + '.png'} alt={this.props.lang} className="flag circle" />;
  }
})

var LanguageSelector = React.createClass({
  noSelection: 'Automatic',

  getInitialState: function() {
    return {
      open: false
    }
  },

  getDisplayName: function(value) {
    if (value in this.props.languageNames) {
      return this.props.languageNames[value];
    }

    return this.noSelection;
  },

  toggle: function() {
    this.setState({
      open: !this.state.open
    });
  },


  selected: function(option) {
    this.setState({
      open: false
    });

    this.props.onSelectLanguage(option);
  },

  render: function() {
    var that = this;

    var options = ['auto'].concat(this.props.languagesAvailable).map(function(option) {
      return <li>
        <a onClick={that.selected.bind(that, option)}>
          {that.getDisplayName(option)}
          {(that.props.autoDetectInputLanguage && option === 'auto' || !that.props.autoDetectInputLanguage && that.props.inputLanguage === option) && ' ✔'}
        </a>
      </li>;
    });

    var displayedSelection = (function() {
      if (that.props.autoDetectInputLanguage) {
        return 'Automatic';
      }
      else {
        return that.getDisplayName(that.props.inputLanguage);
      }
    })();

    return (
      <div className="languageselector">
        <div class="select-wrapper"><a title="Select search language" className="dropdown-button btn-flat " onClick={that.toggle}><i className="material-icons left">language</i> {displayedSelection}</a>
        
        <ul className={'dropdown-content' + (this.state.open ? ' active' : '')}>
          {options}
        </ul>
      </div>
      </div>
    );
  }
});

var LanguageVariantsView = React.createClass({
  languageClicked: function(language) {
    this.props.onChangeActiveVariantLanguage(language);
  },

  render: function() {
    var that = this;

    var activeVariantLanguage = this.props.activeVariantLanguage;

    if (activeVariantLanguage === null && this.props.stats.length) {
      activeVariantLanguage = Object.keys(this.props.stats[0])[0];
    }

    var variants = this.props.stats.map(function(languageVariant) {
      var language = Object.keys(languageVariant)[0];
      var variants = languageVariant[language]
        .map(function(v) {
          v.variantString = v.l.join(' ');
          v.count = v.c;
          return v;
        })
        .filter(function(v) {
          return v.variantString.length;
        });
      var isActive = activeVariantLanguage == language;

      return <VariantsList language={language}
                           variants={variants}
                           changeLanguage={that.languageClicked.bind(that, language)}
                           active={isActive}
                           selectedVariants={that.props.selectedVariants[language] || []}
                           variantSelected={that.props.onSelectVariant.bind(that)}
                           variantUnselected={that.props.onUnselectVariant.bind(that)}
                           variantSearch={that.props.searchVariant.bind(that)} />;
    });
    
    return (
      <div className="languageVariants">
        {variants}
      </div>
    );
  }
});

var VariantsList = React.createClass({
  getColor: function(domain, count) {
    var range = function(count) {
      var ix = domain.indexOf(count);
      return (1 - count/domain[0]) * (100 - 49) + 49;
    };
    var light = range(count)
    return 'hsl(122, 39%, ' + light + '%)';
  },

  addVariant: function(variantId, lang) {
    this.props.variantSelected(variantId, lang);
  },

  removeVariant: function(variantId, lang) {
    this.props.variantUnselected(variantId, lang);
  },

  searchVariant: function(variantString, lang) {
    this.props.variantSearch(variantString, lang);
  },

  render: function() {
    var that = this;

    var countdomain = _.uniq(_.pluck(this.props.variants, "count")).sort(function(a,b) { return b - a; });

    var selectedIds = this.props.selectedVariants;

    var list = this.props.variants
      .filter(function(v) {
        return selectedIds.indexOf(v.id) === -1;
      })
      .map(function(variant) {
        var color = that.getColor(countdomain, variant.count);

        return  <li className="variant">
                  <div onClick={that.addVariant.bind(that, variant.id, that.props.language)} className="chip" style={{backgroundColor: color}}>
                    <span data-badge-caption="" className="badge">{variant.count}</span>
                    <span>{variant.variantString}</span>
                  </div>
                  <i onClick={that.searchVariant.bind(that, variant.variantString, that.props.language)} className="md-dark search material-icons md-18">search</i>
                </li>;
      });

    var selectedVariantsList = this.props.variants
      .filter(function(v) {
        return selectedIds.indexOf(v.id) !== -1;
      })
      .map(function(variant) {
        var color = that.getColor(countdomain, variant.count);

        return  <div onClick={that.removeVariant.bind(that, variant.id, that.props.language)} className="variant">
                  <div style={{backgroundColor: color}} className="chip">
                    <span data-badge-caption="" className="badge">{variant.count}</span>
                    <span>{variant.variantString}</span>
                  </div>
                </div>;
      });

    var clustercount = this.props.variants.length;

    return (
      <div className={this.props.active ? 'active' : ''}>
        <div className='variant-header' onClick={this.props.changeLanguage}>
          <img src={'img/flags/' + this.props.language + '.png'} alt={this.props.language} className="flag circle" />
          {!!selectedVariantsList.length &&
            selectedVariantsList}
          {!!!selectedVariantsList.length &&
            <span className="count grey-text">{clustercount} translation variant{clustercount > 2 ? 's' : ''}</span>}
        </div>
        <ul className='variants'>
          {list}
        </ul>
      </div>
    );
  }
});

var LoadingView = React.createClass({
  render: function() {
    return (
      <div>
        <p>{this.props.progressMessage}</p>
        <div className="progress">
          <div className="indeterminate"></div>
        </div>
      </div>
    );
  }
});

var ExampleNavigationView = React.createClass({
  pagePadding: 4,
  boundHandleArrowKeys: null,

  handleArrowKeys: function(e) {
    if(!$(e.target).is(':input, [contenteditable]')) {
      switch (e.which) {
        case 37: // left
          this.props.showPreviousExample();
        break;
        case 39: // right
          this.props.showNextExample();
        break;
      }
    }
  },

  componentWillUnmount: function() {
    $(document).off('keydown', this.boundHandleArrowKeys);
  },

  componentDidMount: function() {
    this.boundHandleArrowKeys = this.handleArrowKeys.bind(this);
    $(document).on('keydown', this.boundHandleArrowKeys);
  },

  render: function() {
    var that = this;
    var displayedPages = 2 * this.pagePadding + 1;
    var hideStart = (this.props.examplePointer - this.pagePadding) > 1;
    var hideEnd = (Math.max(0, this.props.examplePointer - this.pagePadding) + displayedPages - 1) < this.props.examples.length - 2;
    var pageMin = Math.max(0, this.props.examplePointer - this.pagePadding);
    var pageMax = Math.min(pageMin + displayedPages, this.props.examples.length - 1);

    if (pageMin === 1) {
      pageMin = 0;
    }

    if (pageMax === this.props.examples.length - 1) {
      pageMax = this.props.examples.length;
    }

    var pages = new Array(pageMax - pageMin).fill(0).map(function(val, ix) {
      var example = ix + pageMin;
      return (
        <li className={that.props.examplePointer === example ? 'active' : ''}>
          <a onClick={that.props.showExample.bind(that, example)}>
            {example + 1}
          </a>
        </li>
      );
    });

    return (
      <div className="examples-navigation">
        <ul className="pagination">
          <li className={"prev " + (this.props.examplePointer == 0 ? "disabled" : '')}>
            <a title="Click to show the previous example or press the left arrow key on your keyboard"><i onClick={this.props.showPreviousExample} className="control material-icons">chevron_left</i></a>
          </li>
          {hideStart &&
            <li className={'hide-start' + (this.props.examplePointer === 0 ? ' active' : '')}>
              <a onClick={this.props.showExample.bind(this, 0)}>1</a>…
            </li>
          }
          {pages}
          {hideEnd &&
            <li className={'hide-end' + (this.props.examplePointer === this.props.examples.length - 1 ? ' active' : '')}>
              …<a onClick={this.props.showExample.bind(this, this.props.examples.length - 1)}>{this.props.examples.length}</a>
            </li>
          }
          <li className={"next  " + (this.props.examplePointer == this.props.examples.length - 1 ? "disabled" : '')}>
            <a title="Click to show the next example or press the right arrow key on your keyboard"><i onClick={this.props.showNextExample} className="control material-icons">chevron_right</i></a>
          </li>
        </ul>
      </div>);
  }
});

var ExampleView = React.createClass({
  getInitialState: function() {
    return {
      highlightedTokens: []
    }
  },

  highlightAlignments: function(token) {
    this.setState({
      highlightedTokens: token['alignments'].concat([token['token_id']])
    });
  },

  unhighlightAlignments: function() {
    this.setState({
      highlightedTokens: []
    });
  },

  render: function() {
    var list = [];
	console.dir(this.props.currentExample);
    var example = this.props.currentExample.sentences;

    for (var lang in example) {
      var sentences = Object.values(example[lang]);
      var isInputSentence = this.props.inputLanguage === lang;
      var mainAlignments = this.props.currentExample.target[lang] || this.props.currentExample.source;

      list.push(<div className={"collection-item example-sentence" +   (isInputSentence ? ' input-sentence' : '')}>
          <FlagView lang={lang} />
          <ExampleSentenceView onTokenEnter={this.highlightAlignments.bind(this)} onTokenLeave={this.unhighlightAlignments.bind(this)} highlightedTokens={this.state.highlightedTokens} mainAlignments={mainAlignments} sentences={sentences} />
        </div>);
    }

    return (
      <div className="collection example">
        {list}
      </div>
    );
  }
});

var ExampleSentenceView = React.createClass({
  tokenEnter: function(token) {
    this.props.onTokenEnter(token);
  },

  tokenLeave: function() {
    this.props.onTokenLeave();
  },

  buildSentence: function(sentenceData) {
    var that = this;
    var tokens = sentenceData.map(function(token) {
      var classes = [];

      if (token.lpad) classes.push('lpad');
      if (that.props.mainAlignments.indexOf(token.token_id) !== -1) classes.push('alignment mainalignment');
      if (that.props.highlightedTokens.indexOf(token.token_id) !== -1) classes.push('highlightalignment');

      return <span className={'token ' + classes.join(' ')}>
        {token.lpad && ' '}
        <span className="type" onMouseLeave={that.tokenLeave.bind(that)} onMouseEnter={that.tokenEnter.bind(that, token)}>{token.typestr}</span>
      </span>;
    });

    return <span>{tokens}</span>;
  },

  render: function() {
    return <p>{this.props.sentences.map(this.buildSentence)}</p>;
  }
});

var MetadataFilterView = React.createClass({
  componentDidMount: function() {
    this.materializeSelects();
  },

  componentDidUpdate: function() {
    this.materializeSelects();
  },

  materializeSelects: function() {
    var view = this;
    $('select', this.dom).each(function() {
      $(this).off('change').on('change', view.valueSelected).material_select();
    });
  },

  valueSelected: function(e) {
    this.props.metadataFilterSelected($(e.target).attr('data-metadatakey'), e.target.value === 'NONE' ? null : e.target.value);
  },

  render: function() {
    var that = this;
    var metadata = Object.keys(this.props.config).filter(function(configkey) {
      return that.props.config[configkey].filter;
    }).map(function(configkey) {
      var mdconfig = that.props.config[configkey];

      var mdvalues = (mdconfig.values || []).map(function(mdValue) {
        var displayValue = that.props.getMetadataDisplayValue(mdValue, configkey);
		if (displayValue !== "∅") { // Suppress null values
        	return (
          		<option selected={that.props.filters[configkey] == mdValue} value={mdValue}>{displayValue}</option>
        	);
        }
      });

      return (<div className="metadata-field input-field col">
        <select data-metadatakey={configkey} id={'metadata-filter-' + configkey}>
          <option value='NONE'>any</option>
          { mdvalues }
        </select>
        <label for={'metadata-filter-' + configkey}>{mdconfig.label}</label>
      </div>);
    });

    return (
      <div className="metadata">
        <div className="row" ref={(dom) => { this.dom = dom; }}>
          {metadata}
        </div>
      </div>
    );
  }
});

var MetadataView = React.createClass({
  render: function() {
    var that = this;
    var metadata = Object.keys(this.props.config).map(function(configkey) {
      var mdconfig = that.props.config[configkey];
      var value = !!that.props.currentExample ? that.props.currentExample.metadata[configkey] : null;
      var displayValue = that.props.getMetadataDisplayValue(value, configkey);

      return (<div className="metadata-field col">
        <span className='md-label'>{mdconfig.label}</span>
        <span className='md-value grey-text text-darken-1'>{displayValue}</span>
      </div>);
    });

    return (
      <div className="metadata grey-text">
        <div className="row">
          {metadata}
        </div>
      </div>
    );
  }
});

var InterpretationView = React.createClass({
  render: function() {
    var that = this;
    var tokenList = this.props.queryInput
      .replace(/^\s+|\s+$|\s+(?=\s)/g, '')
      .replace(/\[[ \*]+/g, '[')
      .replace(/[ \*]+\]/g, ']')
      .split(' ').map(function(token) {
      var classes = [];

      if (token === '[') {
        classes.push('operator operator-open');
      }
      else if (token === ']') {
        classes.push('operator operator-close');
      }
      else if (that.props.options.content_words_only && that.props.functionWords.indexOf(token) !== -1) {
        classes.push('function-word');
      }
      else if (that.props.options.token_lemma && token in that.props.lemmaData) {
        classes.push('lemmatized');
        token = that.props.lemmaData[token].lemma;
      }

      return <span className={classes.join(' ')}>{token}</span>;
    });

	var limitHitInfo = null;
	if (that.props.limithit) {
		if (that.props.options.all_hits) {
			limitHitInfo = <div className="grey-text right-align text-small" id="limithit-info">For performance reasons results are limited to a maximum of about 100000 hits.</div>  ;
		} else {
			limitHitInfo = <div className="grey-text right-align text-small" id="limithit-info">Tick “Get all results“ to find more examples.</div>  ;
		}
		
	}

    return <div className="interpretation"> {limitHitInfo}
      <span className="label grey-text">Results for</span>
      {tokenList}
    </div>;
  }
});

var CorpusStatsCompactView = React.createClass({
  render: function() {
    var that = this;
    var languages = Object.keys(this.props.corpus.stats.per_language).map(function(lang) {
      var languageStat = that.props.corpus.stats.per_language[lang];
      return (
        <tr className="lanugageStat">
          <td>{that.props.languageNames[lang]}</td>
          <td style={{"text-align":"right"}}>{numeral(languageStat.sentences).format('0.0a')}</td>
          <td style={{"text-align":"right"}}>{numeral(languageStat.types).format('0.0a')}</td>
          <td style={{"text-align":"right"}}>{numeral(languageStat.tokens).format('0.0a')}</td>
          <td style={{"text-align":"right"}}>{numeral(languageStat.content_words).format('0.0a')}</td>
        </tr>
      );
    });
    var totals = this.props.corpus.stats;
    totals.content_words = Object.values(this.props.corpus.stats.per_language).reduce(function(sum, langStat) {
      return sum + langStat.content_words;
    }, 0)

    return (
      <div className="corpus-stats-compact">
        <span className="total">This corpus contains {numeral(totals.texts).format('0.0a')} texts with {numeral(totals.alignments).format('0.0a')} word alignments.</span>
        <br/>
        <table className="bordered">
          <thead>
            <tr>
              <th>Language</th>
              <th style={{"text-align":"right"}}>Sentences</th>
              <th title="Number of unique different tokens" style={{"text-align":"right"}}>Types</th>
              <th  title="Number of occurrences of words/punctuation" style={{"text-align":"right"}}>Tokens</th>
              <th style={{"text-align":"right"}}>Content Words</th>
            </tr>
          </thead>
          <tbody>
            {languages}
          </tbody>
          <tfoot>
            <tr>
              <th>Total</th>
              <th style={{"text-align":"right"}}>{numeral(totals.sentences).format('0.0a')}</th>
              <th style={{"text-align":"right"}}>{numeral(totals.types).format('0.0a')}</th>
              <th style={{"text-align":"right"}}>{numeral(totals.tokens).format('0.0a')}</th>
              <th style={{"text-align":"right"}}>{numeral(totals.content_words).format('0.0a')}</th>
            </tr>
          </tfoot>
        </table>
      </div>
    );
  }
});

var CorpusSelectionView = React.createClass({

  getInitialState: function() {
    return {
      selectedId: this.props.selectedCorpusId
    };
  },

  selectCorpus: function(corpus) {
    this.setState({
      selectedId: corpus.id
    });
  },

  render: function() {
    var that = this;
    var corpora = this.props.corpora.map(function(corpus) {
      var selected = that.state.selectedId == corpus.id;

      return (
        <div className="col m12 s12">
          <div className={"card corpus" + (selected ? ' z-depth-3' : '')} onClick={that.selectCorpus.bind(that, corpus)}>
            <div className="card-image" style={{backgroundImage: corpus.logo ? 'url(' + corpus.logo + ')' : ''}}>
            </div>
            <div className="card-content">
              <span className="card-title">{corpus.name}</span>
              <p><strong>{numeral(corpus.stats.sentences).format('0.0a')}</strong> sentences and <strong>{numeral(corpus.stats.tokens).format('0.0a')}</strong> tokens in <strong>{Object.keys(corpus.stats.per_language).length}</strong> languages</p><br/>
              <p>{corpus.description}</p>
              {corpus.link &&
                <p><a href={corpus.link}>more information</a></p>
              }
            </div>
          </div>
        </div>
      );
    });

    var selectedCorpus = this.props.corpora.find(function(c) {
      return c.id === that.state.selectedId;
    });

    return (
      <div>
        <div className='modal-content'>
          <div className="row corpus-selection">
            {corpora}
          </div>
        </div>
        <div className='modal-footer'>
          {selectedCorpus &&
            <span className="btn" onClick={this.props.selectCorpus.bind(this, selectedCorpus)} >Use “{selectedCorpus.name}”</span>}
        </div>
      </div>
    );
  }
});

var EmptyResultView = React.createClass({
  render: function() {
    return (
      <div className="emptyresult">
        <h3 className="grey-text">No results found.</h3>
        <p className="grey-text text-darken-1">Please check the spelling of your search words and the selected options.</p>
      </div>);
  }
});

var App = React.createClass({
  baseUrl: window.location.href.split('#')[0],
  baseAPIUrl: window.location.href.split('#')[0] + 'api/',

  endpoints: {
    query: 'query.php',
    example: 'example.php',
    langIdent: 'langident.php',
    lemmatize: 'lemmatize.php',
    functionWords: 'getfunctionwords.php',
    corporainformation: 'corporainformation.php',
    prepareCorpus: 'preparecorpus.php'
  },

  urlStates: ['queryInput', 'selectedCorpusId', 'options', 'inputLanguage', 'autoDetectInputLanguage', 'searchStarted', 'selectedVariants', 'examplePointer', 'metadataFilter'],

  componentWillMount: function() {
    this.loadInitData();
    this.loadStateFromURL();
  },

  componentDidMount: function() {
    if (this.state.searchStarted && this.state.queryInput !== '') {
      this.query(this.state.queryInput, this.state.options);
    }
    this.saveStateToURL = _.throttle(this.saveStateToURL, 1000);

    $(this.corpusModal).modal();
    $('.collapsible').collapsible();
  },

  componentDidUpdate: function() {
    this.saveStateToURL();
    $('.collapsible').collapsible();

    this.prepareCorpus();
  },

  loadStateFromURL: function() {
    try {
      var state = JSON.parse(decodeURIComponent(window.location.hash.replace(/^#/, "")));
      state.initByUrl = true;
      this.setState(state);
    } catch (e) {
      console.log("Not initialized from URL:", e);
    }
  },

  saveStateToURL: function() {
    window.location.hash = encodeURIComponent(JSON.stringify(_.pick(this.state, this.urlStates)));
  },

  loadInitData: function() {
    var app = this;
    var tasks = [
      this.loadJSON(new URL('./uiresources/languagenames.en.json', this.baseUrl)),
      this.loadJSON(this.getEndpointURL('corporainformation'))
    ];

    return Promise.all(tasks)
      .then(function(results) {
        var languageNames = results[0];
        var corpora = results[1];
        var defaultCorpus = corpora.find(function(c) { return c.default; });
        var onlineCorpora = corpora.filter(function(c) { return c.online; });
        var selectedCorpus = corpora.find(function(c) { return c.id == app.state.selectedCorpusId; });

        if (selectedCorpus == null || !selectedCorpus.online) {
          selectedCorpus = defaultCorpus.online ? defaultCorpus : onlineCorpora[0];
        }

        if (onlineCorpora.length) {
          var metadataFilter = app.state.metadataFilter;
          var invalidFilters = Object.keys(metadataFilter).filter(function(key) {
            return !(key in selectedCorpus.metadata);
          });

          invalidFilters.forEach(function(key) {
            delete metadataFilter[key];
          });

          app.setState({
            appReady: true,
            metadataFilter: metadataFilter,
            corpora: corpora,
            selectedCorpusId: selectedCorpus.id,
            languageNames: results[0],
            languagesAvailable: Object.keys(selectedCorpus.stats.per_language)
          });
        }
        else {
          alert('No corpus seems to be available at the moment. Please try again later.');
        }
      });
  },

  loadJSON: function(url) {
    return fetch(url)
      .then(function(response) {
        return response.json();
      });
  },

  getEndpointURL: function(endpoint) {
    var url = new URL(this.endpoints[endpoint], this.baseAPIUrl);

    if (this.state.selectedCorpusId !== null) {
      url.searchParams.append('corpus', this.state.selectedCorpusId);
    }

    return url;
  },

  getInitialState: function(){
    return {
      stats: [],
      examples: [],
      limithit: false,
      query: "",
      queryInput: "",
      currentExample: null,
      options: {
        token_lemma: true,
        content_words_only: false,
        hitlimit: 1000,
        all_hits:false
      },
      lemmaData: [],
      appReady: false,
      corpora: [],
      selectedCorpusId: null,
      functionWords: [],
      corpusPrepared: false,
      searchCompleted: false,
      progressMessage: '',
      loading: false,
      metadataFilter: {},
      autoDetectInputLanguage: true,
      inputLanguage: null,
      filteredExamples: [],
      examplePointer: 0,
      searchStarted: false,
      languagesAvailable: [],
      languageNames: {},
      activeVariantLanguage: null,
      selectedVariants: {},
      hitlimit: 1000
    };
  },

  getTokens: function(queryString) {
    var tokens = queryString
      .replace(/>/g, ' ')
      .replace(/\*/g, ' ')
      .replace(/^\s+|\s+$|\s+(?=\s)/g, '')
      .replace(/\[[ \*]+/g, '[')
      .replace(/[ \*]+\]/g, ']')
      .split(' ');

    return tokens;
  },

  detectLanguage: function() {
    var app = this;
    return new Promise(function(resolve, reject) {
      if (!app.state.autoDetectInputLanguage) {
        resolve();
        return;
      }

      app.setState({
        progressMessage: 'Detecting language…',
        loading: true
      });

      var url = app.getEndpointURL('langIdent');
      url.searchParams.append('tokens', JSON.stringify(app.getTokens(app.state.query)));

      fetch(url)
        .then(function(response) {
          return response.json();
        })
        .then(function(identification) {
          app.setState({
            inputLanguage: identification['lang'],
            loading: false
          });
          resolve();
        })
        .catch(reject);
    });
  },

  prepareCorpus: function() {
    if (!this.state.corpusPrepared) {
      fetch(this.getEndpointURL('prepareCorpus'));
      this.setState({corpusPrepared: true});
    }
  },

  lemmatize: function() {
    var app = this;
    return new Promise(function(resolve, reject) {
      if (!app.state.options.token_lemma) {
        return resolve();
      }

      app.setState({
        progressMessage: 'Lemmatizing…',
        loading: true
      });

      var url = app.getEndpointURL('lemmatize');
      url.searchParams.append('tokens', JSON.stringify(app.getTokens(app.getProcessedQuery())));
      url.searchParams.append('lang', app.state.inputLanguage);

      fetch(url)
        .then(function(response) {
          return response.json();
        })
        .then(function(lemmaData) {
          app.setState({
            lemmaData: lemmaData,
            loading: false
          });
          resolve();
        })
        .catch(reject);
    });
  },

  getFunctionWords: function() {
    var app = this;
    return new Promise(function(resolve, reject) {
      if (!app.state.options.content_words_only) {
        return resolve();
      }

      app.setState({
        progressMessage: 'Filtering function words…',
        loading: true
      });

      var url = app.getEndpointURL('functionWords');
      url.searchParams.append('tokens', JSON.stringify(app.getTokens(app.getProcessedQuery())));

      fetch(url)
        .then(function(response) {
          return response.json();
        })
        .then(function(functionWords) {
          app.setState({
            functionWords: functionWords,
            loading: false
          });
          resolve();
        })
        .catch(reject);
    });
  },

  search: function() {
    var app = this;
    return new Promise(function(resolve, reject) {
      app.setState({
        progressMessage: 'Searching…',
        loading: true
      });

      var url = app.getEndpointURL('query');
      var options = Object.assign({}, app.state.options, {metadata: app.state.metadataFilter});

      url.searchParams.append('query', app.getProcessedQuery());
      url.searchParams.append('options', JSON.stringify(options));
      url.searchParams.append('lang', app.state.inputLanguage);
      url.searchParams.append('hitlimit', 1000);

      fetch(url)
        .then(function(response) {
          return response.json();
        })
        .then(function(results) {
          app.setState(results);
          app.setState({
            examples: results.example,
            loading: false
          });

          resolve(app);
        })
        .catch(reject);
    });
  },

  fetchExample: function(example) {
    var app = this;
    return new Promise(function(resolve, reject) {
      var url = app.getEndpointURL('example');

      url.searchParams.append('example', JSON.stringify(example));

      fetch(url)
        .then(function(response) {
          return response.json();
        })
        .then(function(exampledata) {
          var exampleClone = JSON.parse(JSON.stringify(example));
          exampleClone.sentences = exampledata.sentences;
          exampleClone.metadata = exampledata.metadata;

          resolve(exampleClone);
        })
        .catch(reject);
    });
  },

  query: function(queryInput, options) {
    options = !options ? this.state.options : options;
    queryInput = !queryInput ? this.state.queryInput : queryInput;
	if (!queryInput.trim()) {return ; };
    var app = this;
    this.setState({
      query: queryInput.replace(/^\s+|\s+$|\s+(?=\s)/g, '').replace(/\[[^\]]+\]/g, function(match) { return match.substr(1, match.length - 2).trim().split(' ').join(' > '); }),
      queryInput: queryInput,
      origQueryInput: queryInput,
      searchStarted: true,
      options: options,
      loading: true,
      lemmaData: [],
      searchCompleted: false,
      functionWords: [],
      examples: [],
      filteredExamples: [],
      stats: [],
      selectedVariants: app.state.initByUrl ? app.state.selectedVariants : {},
      currentExample: null,
      initByUrl: false,
      examplePointer: app.state.initByUrl ? app.state.examplePointer : 0
    }, function() {
      this.detectLanguage()
        .then(this.getFunctionWords)
        .then(this.lemmatize)
        .then(this.search)
        .catch(function(e) {
          console.log("An error 1 happened.", e);
        })

        .then(function() {
          app.setState({
            loading: true,
            progressMessage: 'Getting example…'
          })
        })
        .then(this.filterExamples)
        .then(function() {
          return app.showExample(app.state.examplePointer);
        })
        .catch(function(e) {
          console.log("An error happened.", e);
        })
        .then(function() {
          app.setState({
            loading: false,
            searchCompleted: true
          });
        });
    });
  },

  getProcessedQuery: function() {
    var app = this;

    return app.state.query.split('>').map(function(clause) {
      var tokens = clause.split(' ').filter(function(token) { return token != ''; });

      if (app.state.functionWords.length && app.state.options.content_words_only) {
        tokens = tokens.filter(function(token) {
          return app.state.functionWords.indexOf(token) === -1;
        });
      }

      if (Object.keys(app.state.lemmaData).length && app.state.options.token_lemma) {
        tokens = tokens.map(function(token) {
          if (token in app.state.lemmaData) {
            return app.state.lemmaData[token].lemma;
          }
          else {
            return token;
          }
        });
      }

      return tokens.join(' ');
    }).join('>').replace(/^>+|>+$|>+(?=>)/g, '');
  },

  setQueryInput: function(query) {
    this.setState({
      queryInput: query
    });
  },

  setActiveVariantLanguage: function(lang) {
    this.setState({
      activeVariantLanguage: lang
    });
  },

  goHome: function() {
    window.location.href = window.location.href.split('#')[0];
  },

  addSelectedVariant: function(variantId, lang) {
    var selectedVariants = _.clone(this.state.selectedVariants);

    if (!(lang in selectedVariants)) {
      selectedVariants[lang] = [];
    }

    selectedVariants[lang].push(variantId);

    this.applySelectedVariants(selectedVariants);
  },

  removeSelectedVariant: function(variantId, lang) {
    var selectedVariants = _.clone(this.state.selectedVariants);

    if (lang in selectedVariants) {
      var pos = selectedVariants[lang].indexOf(variantId);
      if (pos !== -1) {
        selectedVariants[lang].splice(pos, 1);
      }
    }

    this.applySelectedVariants(selectedVariants);
  },

  applySelectedVariants: function(selectedVariants) {
    var app = this;

    this.setState({
      selectedVariants: selectedVariants
    }, function() {
      app.filterExamples()
        .then(app.showFirstExample)
    });
  },

  filterExamples: function() {
    var app = this;

    return new Promise(function(resolve, reject) {
      var examples = app.state.examples;

      var filteredVariantLanguages = Object.keys(app.state.selectedVariants);

      var selectedLanguages = filteredVariantLanguages.filter(function(lang) {
        return app.state.selectedVariants[lang].length;
      });

      if (selectedLanguages.length) {
        examples = examples.filter(function(e) {
          return selectedLanguages.every(function(lang) {
            return app.state.selectedVariants[lang].indexOf(e.cluster[lang]) !== -1;
          });
        });
      }

      var filteredExamples = examples.reduce(function(exampleCollection, cluster) {
        return exampleCollection.concat(cluster.examples);
      }, []).sort(function(exampleA, exampleB) {
        return exampleA.rank - exampleB.rank;
      });

      app.setState({
        filteredExamples: filteredExamples
      }, resolve);
    });
  },

  showFirstExample: function() {
    return this.showExample(0);
  },

  showNextExample: function() {
    return this.showExample(this.state.examplePointer + 1);
  },

  showPreviousExample: function() {
    return this.showExample(this.state.examplePointer - 1);
  },

  showExample: function(ix) {
    if (ix === null) {
      ix = 0;
    }

    var app = this;
    var examples = this.state.filteredExamples;

    if (ix >= examples.length || ix < 0) {
      return new Promise(function(resolve, reject) {
        resolve();
      });
    }

    var example = examples[ix];

    app.setState({
      examplePointer: ix
    });

    return app.fetchExample(example)
      .then(function(fetchedExample) {
        app.setState({
          currentExample: fetchedExample
        })
      });
  },

  setInputLanguage: function(lang) {
    var state = {
      autoDetectInputLanguage: false,
      inputLanguage: lang
    };

    if (lang === 'auto') {
      state = {
        autoDetectInputLanguage: true,
        inputLanguage: null
      };
    }

    this.setState(state, this.query);
  },

  getMetadataDisplayValue: function(value, configkey) {
    var that = this;
    var metadata = this.state.corpora.find(function(c) { return c.id === that.state.selectedCorpusId; }).metadata;

    if (metadata == null) {
      return null;
    }

    var config = metadata[configkey];
    var displayValue = null;

    if (value !== null) {
      switch (config.type) {
        case 'date':
          displayValue = new Date(value).toDateString();
          break;
        case 'langcode':
          displayValue = value in this.state.languageNames ? this.state.languageNames[value] : "∅";
          break;
        case 'custom':
          displayValue = "mapping" in config && value in config.mapping ? config.mapping[value] : "∅";
          break;
      }
    }

    return displayValue == null ? value : displayValue;
  },

  metadataFilterSelected: function(key, value) {
    var metadataFilter = this.state.metadataFilter;

    if (!value) {
      delete metadataFilter[key];
    }
    else {
      metadataFilter[key] = value;
    }

    this.setState({
      metadataFilter: metadataFilter
    }, this.query);
  },

  showCorpusOverview: function() {
    $(this.corpusModal).modal('open');
  },

  selectCorpus: function(corpus) {
    var app = this;
    $(this.corpusModal).modal('close');

    this.setState({
      metadataFilter: {},
      selectedCorpusId: corpus.id,
      corpusPrepared: false,
      languagesAvailable: Object.keys(corpus.stats.per_language)
    }, function() {
      if (app.state.searchStarted) {
        app.query();
      }
    });
  },

  searchVariant: function(str, lang) {
    this.query(str);
  },

  render: function() {
    var that = this;
    var examples = this.state.filteredExamples;
    var examplePointer = Math.min(examples.length - 1, this.state.examplePointer);
    var corpus = this.state.corpora.find(function(c) { return c.id === that.state.selectedCorpusId; }) || {};
    var mdConfig = corpus.metadata || {};
    var hasFilterableMetadata = Object.keys(mdConfig).some(function(mId) { return mdConfig[mId].filter; });
    return (
      <div id="app">
        <main className={this.state.searchStarted ? 'search-started' : ''} >

          {!!this.state.appReady && 
            <header>
              <div className="brand">
                <h3 title="Search multiword expressions in multiparallel corpora" onClick={this.goHome} >multiling<span>wis</span><span className="version"></span></h3>
              </div>
              <SearchView
                  inputLanguage={this.state.inputLanguage}
                  autoDetectInputLanguage={this.state.autoDetectInputLanguage}
                  options={this.state.options}
                  query={this.state.queryInput}
                  onQueryChange={this.setQueryInput}
                  onSubmit={this.query}
                  languagesAvailable={this.state.languagesAvailable}
                  languageNames={this.state.languageNames}
                  onChangeInputLanguage={this.setInputLanguage} />
            </header>
          }
          {corpus &&
            <span onClick={this.showCorpusOverview} className="btn-flat grey-text activeCorpus">
              <i className="material-icons left">library_books</i> {corpus.name}
            </span>
          }
          {!!this.state.appReady && 
            <div className="searchspace">
              <div className="results">
                {this.state.loading && 
                  <div className="loadingView">
                    <div className="progressBar">
                      <LoadingView progressMessage={this.state.progressMessage}/>
                    </div>
                  </div>
                }
                <div className="row">
                  <div className="col m8 s12">
                    <div className="example-container">
                      <div>
                        {this.state.searchCompleted &&
                          <div>
                            <InterpretationView
                              hasFilterableMetadata={hasFilterableMetadata}
                              getMetadataDisplayValue={this.getMetadataDisplayValue}
                              metadataConfig={mdConfig}
                              limithit={this.state.limithit}
                              queryInput={this.state.origQueryInput}
                              query={this.state.query}
                              functionWords={this.state.functionWords}
                              lemmaData={this.state.lemmaData}
                              options={this.state.options} />
                            {!!examples.length &&
                              <ExampleNavigationView
                                examples={examples}
                                examplePointer={examplePointer}
                                showExample={this.showExample}
                                showPreviousExample={this.showPreviousExample}
                                showNextExample={this.showNextExample} />
                            }
                          </div>
                        }
                        {!!this.state.currentExample &&
                          <div className="card">
                            <div className="card-content example-box">
                              <ExampleView
                                inputLanguage={this.state.inputLanguage}
                                currentExample={this.state.currentExample}
                                examples={examples} />
                            </div>
                            <div className="card-action">
                              <MetadataView getMetadataDisplayValue={this.getMetadataDisplayValue} config={mdConfig} currentExample={this.state.currentExample} />
                            </div>
                          </div>
                        }
                        {this.state.searchCompleted && !examples.length &&
                          <EmptyResultView />
                        }
                      </div>
                    </div>
                  </div>
                  <div className="col m4 s12">
                    {hasFilterableMetadata &&
                      <div className="">
                        <div className="card-content">
                            <MetadataFilterView metadataFilterSelected={this.metadataFilterSelected} filters={this.state.metadataFilter} getMetadataDisplayValue={this.getMetadataDisplayValue} config={mdConfig} />
                        </div>
                      </div>}
                    <div className="">
                      <div className="card-content">
                        <LanguageVariantsView
                          stats={this.state.stats}
                          languagesAvailable={this.state.languagesAvailable}
                          selectedVariants={this.state.selectedVariants}
                          activeVariantLanguage={this.state.activeVariantLanguage}
                          onChangeActiveVariantLanguage={this.setActiveVariantLanguage}
                          onSelectVariant={this.addSelectedVariant}
                          onUnselectVariant={this.removeSelectedVariant}
                          searchVariant={this.searchVariant} />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          }
        </main>
        <footer className="page-footer">
          <div className="container footer-help">
            <div className="row">
              <ul className="collapsible" data-collapsible="collapsible">
                <li>
                  <div className="collapsible-header">
                    <div className="col m6 s12">
                      <h5 title="Click to show or hide help text" className="white-text mw-help-footer">Help</h5>
                    </div>
                    <div className="col m6 s12">
                      <h5 title="Click to show or hide corpus statistics" className="white-text mw-help-footer">
                        {this.state.appReady &&
                        <span>
                          About &ldquo;{corpus.name}&rdquo;
                        </span>}
                        {!this.state.appReady &&
                        <span>
                          Corpus information
                        </span>}
                      </h5>
                    </div>
                  </div>
                  <div className="collapsible-body">
                    <div className="col m6 s12">
                      <p className="grey-text text-lighten-4">
                        Just enter an inflected phrase in the search form.
                        <br/>Per default multilingwis guesses the language and reduces your query words to base forms.
                      </p>
                      <p className="grey-text text-lighten-4">
                      For fixed phrases where every word has to appear in the exact order of the query, group the words by brackets: <br/><a className="search-example" href="?q=%5Bby and large%5D" >[by and large]</a>
                      </p>
                       <p className="grey-text text-lighten-4">
                      If a word of your fixed phrase query can be variable, replace it by an asterisk (*): <br/><a className="search-example" href="?q=%5Bkeep * head above water%5D" >[keep * head above water]</a>
                      </p>
                       <p className="grey-text text-lighten-4">
                      A query can contain fixed phrases with several asterisks and words without any ordering constraints: <br/><a className="search-example" href="?q=avere %5B fare * * passo %5D" >avere [fare * * passo] </a>
                      </p>
                        <h6 className="white-text "><strong>Explanations for the search options</strong></h6> 
                       <div className="grey-text text-lighten-4">
                      <p> <i className="tiny material-icons">check_box</i>︎ Convert to lemmas: Automatically reduce the search words to their base forms. </p>
                       <p><i className="tiny material-icons">check_box</i>︎ Only content words: Only words of the part-of-speech classes adjective, adverb, noun, verb are used for the search and their corresponding translations. </p>
                       <p><i className="tiny material-icons">check_box</i>︎ Get all results: If  checked, more than 1000 search hits will be evaluated. Note that for performance reasons at most 100000 search hits will be processed.</p>
                      </div>
                    </div>
                    <div className="col m6 s12">
                      <p className="grey-text text-lighten-4">{corpus.description}</p>
                      <p className="grey-text text-lighten-4">
                        {corpus.stats &&
                          <CorpusStatsCompactView languageNames={this.state.languageNames} corpus={corpus} />}
                      </p>
                      {this.state.corpora.length > 1 &&
                          <p style={{"text-align":"center"}}>
                            <span onClick={this.showCorpusOverview} className="btn-flat white-text">
                              <i className="material-icons left">loop</i> Switch corpus
                            </span>
                          </p>}
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div className="footer-copyright">
            <div className="container">
              <a className="grey-text text-lighten-4" target="_blank" href="http://www.cl.uzh.ch">Institute of Computational Linguistics / University of Zurich</a> &mdash; <a className="grey-text text-lighten-4" target="_blank" href="http://pub.cl.uzh.ch/purl/sparcling_project">SPARCLING</a> project &mdash; <a className="grey-text text-lighten-4" target="_blank" href="https://gitlab.cl.uzh.ch/sparcling/multilingwis2/">Code Repository</a>
            </div>
          </div>
        </footer>
        <div className="corpus-overview modal modal-fixed-footer" ref={(dom) => { this.corpusModal = dom; }}>
          <CorpusSelectionView selectCorpus={this.selectCorpus} selectedCorpusId={this.state.selectedCorpusId} languageNames={this.state.languageNames} corpora={this.state.corpora || []} />
        </div>
      </div>
    );
  }
});

ReactDOM.render(
  <App />,
  document.getElementById('entry')
);

