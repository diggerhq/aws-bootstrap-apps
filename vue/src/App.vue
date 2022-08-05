<template>
    <div class="App">
      <header class="App-header">
        <div class="App-logo-container">
          <img alt="Vue logo" class="App-logo" src="./assets/logo.png">
        </div>
        <h3>
          Congratulations! You have deployed a service on Digger
        </h3>
        <h4 class="App-link">
          This is the default output of our sample vue app. Lets go dig!
        </h4>
      </header>
    </div>
</template>


<style>

body {
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen',
    'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue',
    sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

code {
  font-family: source-code-pro, Menlo, Monaco, Consolas, 'Courier New',
    monospace;
}

.App {
  text-align: center;
}

.App-logo-container {
  height: 28vmin;
  width: 28vmin;
  border-radius: 50%;
  background-color: white;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 5vmin;
}

.App-logo {
  pointer-events: none;
  height: 20vmin;
  width: 20vmin;
}

@media (prefers-reduced-motion: no-preference) {
  .App-logo-container {
    animation: App-logo-spin infinite 20s linear;
  }
}

.App-header {
  background-color: #282c34;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  font-size: calc(10px + 2vmin);
  color: white;
}

.App-link {
  color: #61dafb;
}

@keyframes App-logo-spin {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

</style>
