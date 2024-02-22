<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>React App</title>
  <!-- Bootstrap CDN -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
    handleSubmit(event) {
      event.preventDefault();
      const formData = new FormData(event.target);
      const email = formData.get('email');
      const message = formData.get('message');
      alert(`Email: ${email}\nMessage: ${message}`);
    }

    render() {
      return (
        <div className="container">
          <h1 className="mt-5">Contact Us</h1>
          <form onSubmit={this.handleSubmit} className="mt-3" method="POST" action="/Contact/read">
            <div className="form-group">
              <label htmlFor="email">Email:</label>
              <input type="email" placeholder="jondoe@gmail.com" className="form-control" id="email" name="email" required />
            </div>
            <div className="form-group">
              <label htmlFor="message">Message:</label>
              <textarea className="form-control" placeholder="Hello!" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" className="btn btn-primary">Send Message</button>
          </form>
        </div>
      );
    }
  }

  ReactDOM.render(<App />, document.getElementById('root'));
</script>

</body>
</html>
