import React, { Component } from 'react';

class Lesson extends Component {
	
    render() {
        return React.createElement('li', { className: 'list-group-item'}, 'React 123');
    }
}

export default Lesson;
