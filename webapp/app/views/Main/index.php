<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Term Projects</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div id="root"></div>

    <!-- React CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react/17.0.2/umd/react.development.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react-dom/17.0.2/umd/react-dom.development.js"></script>

    <!-- Babel CDN (for JSX transformation) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.26.0/babel.min.js"></script>

    <script type="text/babel">
        class App extends React.Component {
            render() {
                return (
                    <div className="container">
                        <h1 className="mb-3">Term projects</h1>
                        <h2>Santiago&apos;s project</h2>
                        <p>This project aims to develop a user-friendly web application that helps people find the cheapest grocery prices nearby. The target users include those who want to save money on groceries, people with mobility issues, and busy professionals. Users should have basic computer skills to navigate the website easily. The main issue this project addresses is the lack of a central place to compare grocery prices locally, which currently requires visiting multiple stores or relying on ads. The goal is to use web scraping to gather real-time pricing data from different stores and present it in an easy-to-use format. This system aims to help users make better shopping decisions and save money on groceries.</p>
                        <h2>Ceveline&apos;s project</h2>
                        <img src='/images/hoopville.png' height="200"></img>
                        <p>The "Hoopville" project involves creating a booking platform for a private multi-sport performance center focused on basketball in Montreal. The project aims to help our client develop an online e-commerce website offering athletic room rental and membership subscription options for booking courts and training sessions. Features include gym booking, scheduling sessions, canceling bookings, viewing schedules, and managing accounts and payments. Our goal is to create a user-friendly website with numerous features while maintaining a sleek design.</p>
                    </div>
                );
            }
        }

        ReactDOM.render(<App />, document.getElementById('root'));
    </script>

</body>

</html>