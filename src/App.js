import logo from './logo.svg';
import './App.css';

function App(props) {
  
  const element = "<h1>Header</h1>";

  return (
    <div className="App">
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
        <p>
          Edit <code>src/App.js</code> and save to reload.
        </p>
        <a
          className="App-link"
          href="https://reactjs.org"
          target="_blank"
          rel="noopener noreferrer"
        >
          Learn React
        </a>
        {props.state}
      </header>
    </div>
  );
}

export default App;
