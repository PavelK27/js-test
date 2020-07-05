import React from "react";
import { render } from "react-dom";

class App extends React.Component {
    constructor(props) {
        super(props);
    }

	render() {
        console.log('react component mounted');
		return (
			null
		)
	};
}

render(<App />, document.getElementById("ReactDemo"));
