import logo from './digger-logo.png';
import './App.css';

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <div className="App-logo-container">
          <img src={logo} className="App-logo" alt="logo" />
        </div>
        <h3>
          Congratulations! You have deployed a service on Digger
        </h3>
        <h4 className="App-link">
          This is the default output of our sample react app. Lets go dig!
        </h4>
      </header>
    </div>
  );
}

export default App;
