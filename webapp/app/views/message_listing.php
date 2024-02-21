<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Messages</title>
    <!-- Bootstrap CSS CDN -->
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
    // Message component to display each message
    function Message({ email, message, IP }) {
        return (
            <li className="list-group-item">
                <strong>Email:</strong> {email}<br />
                <strong>Message:</strong> {message}<br />
                <strong>IP:</strong> {IP}
            </li>
        );
    }

    // Messages component to display all messages
    class Messages extends React.Component {
        render() {
            const { messages } = this.props;
            return (
                <div className="container">
                    <h1 className="mt-5">Messages</h1>
                    <ul className="list-group mt-3">
                        {messages.map((message, index) => (
                            <Message key={index} {...message} />
                        ))}
                    </ul>
                </div>
            );
        }
    }

    // Default messages data
    const defaultMessages = [
        {"email":"amy@email.com","message":"Hi","IP":"143.119.66.25"},
        {"email":"bob@email.com","message":"I love my job!","IP":"141.78.73.72"}
    ];

    // Render Messages component with default messages
    ReactDOM.render(<Messages messages={defaultMessages} />, document.getElementById('root'));
</script>

</body>
</html>
