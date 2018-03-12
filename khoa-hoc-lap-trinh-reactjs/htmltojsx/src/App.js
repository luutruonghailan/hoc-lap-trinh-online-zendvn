import React, { Component } from 'react';
import {CopyToClipboard} from 'react-copy-to-clipboard';

const HTMLtoJSX = require('@tsuyoshiwada/htmltojsx');

class App extends Component {
    constructor(props) {
        super(props);

        this.state = {
            input   : 
	            `<div class="foo bar" style="width: 400px; padding: 20px 5px; background: white;">
				    <h2 data-value="foo">Support SVG attributes</h2>
				    <svg height="100" width="100"><circle cx="50" cy="50" r="40" stroke="black" stroke-width="3" fill="red" fill-rule="evenodd"/></svg>
				    <input type="url" name="ds" value="123" id="inputDs" class="form-control" value="" required="required" title="">
				</div>`
			,
        	output  : 'HTML to JSX',
        	value: '',
    		copied: false

        };

        this.handleChange = this.handleChange.bind(this);
        this.handleConvert = this.handleConvert.bind(this);
    }

    handleConvert(){
    	const converter = new HTMLtoJSX({
	  		createClass: false, // default `true`
	  		indent: '  ',       // default `'  '`
		});

    	this.setState({
			output: converter.convert(this.state.input)
		});
    }

    handleChange(event) {
        const target = event.target;    // input selectbox
        const value  = target.type === 'checkbox' ? target.checked : target.value;
        const name   = target.name;

        this.setState({
            [name]: value
        });
    }

    render() {
    	let {input, output} = this.state;
    	let style = (this.state.copied === true) ? { 'background-color': '#EFF7B3'} : null;
        return ( 
        	

            <div className="row">
                <div className="col-xs-5 col-sm-5 col-md-5 col-lg-5">
	                <div className="panel panel-info">
	                    <div className="panel-heading">
	                        <h3 className="panel-title">HTML</h3>
	                    </div>
	                    <div className="panel-body">
	                        <textarea value={input} onChange={this.handleChange} name="input" id="input" className="form-control" rows="3" required="required"></textarea>
	                    </div>
						<div className="panel-footer">
							<button onClick={this.handleConvert} type="button" className="btn btn-success">Convert</button>
						</div>
	                </div>
	            </div>

	            <div className="col-xs-7 col-sm-7 col-md-7 col-lg-7">
	                <div className="panel panel-info">
	                    <div className="panel-heading">
	                        <h3 className="panel-title">JSX</h3>
	                    </div>
	                    <div className="panel-body">
	                        <pre style={style}>{output}</pre>
	                    </div>
	                    <div className="panel-footer">
	                    	<CopyToClipboard text={this.state.output}
					          onCopy={() => this.setState({copied: true})}>
					          <button  type="button" className="btn btn-success">Copy</button>
					        </CopyToClipboard>
						</div>
	                </div>
	            </div>
            </div>
        );
    }
}

export default App;