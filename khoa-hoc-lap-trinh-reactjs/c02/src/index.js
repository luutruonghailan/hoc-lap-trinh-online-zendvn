import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App';
// import StudyForm from './components/StudyForm';
import registerServiceWorker from './registerServiceWorker';


ReactDOM.render(
	<App />,
	document.getElementById('main-content'));


registerServiceWorker();
