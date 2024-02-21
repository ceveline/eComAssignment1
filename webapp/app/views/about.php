<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>React App</title>
</head>
<body>

<div id="root"></div>

<!-- React CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/react/17.0.2/umd/react.development.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/react-dom/17.0.2/umd/react-dom.development.js"></script>

<!-- Babel CDN (for JSX transformation) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.26.0/babel.min.js"></script>

<script type="text/babel">
  // Your React code goes here
  class App extends React.Component {
    render() {
      return (
        //useState()
        <div>
          <h1>Hello, React!</h1>
          <p>This is a basic React app using CDNs.</p>
          <button onClick={() => alert('You clicked the button!')}>Click Me</button>
        </div>
      );
    }
  }

  ReactDOM.render(<App />, document.getElementById('root'));
</script>

</body>
</html>
