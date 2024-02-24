<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .rounded-square {
      width: 300px;
      /* Adjust as needed */
      height: 300px;
      /* Adjust as needed */
      object-fit: cover;
    }

    .rounded-square img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>
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
    const { useState } = React;

    function App() {
      const [teamMember, setTeamMember] = useState(null);

      function handleClick(member) {
        setTeamMember(member);
      }

      function handleBack() {
        setTeamMember(null);
      }

      return (
        <div className="container">
          <h2>Meet Our Team</h2>
          {teamMember === null ? (
            <div className="row">
              <button className="btn btn-primary col p-3 mx-2" onClick={() => handleClick('team1')}>Santiago's team</button>
              <button className="btn btn-primary col p-3 mx-2" onClick={() => handleClick('team2')}>Ceveline's team</button>
            </div>
          ) : (
            <div>
              <button className="btn btn-outline-dark" onClick={handleBack}>Back</button>
              {teamMember === 'team1' && (
                <div className="row">
                  <div className="col-md-6">
                    <figure className="text-center">
                      <img src="/images/damiano.png" className="rounded-square" alt="Team Member 1" />
                      <figcaption>Damiano Miloncini</figcaption>
                    </figure>
                  </div>
                  <div className="col-md-6">
                    <figure className="text-center">
                      <img src="/images/sheldon.png" className="rounded-square" alt="Team Member 2" />
                      <figcaption>Sheldon Green</figcaption>
                    </figure>
                  </div>
                  <div className="col-md-6">
                    <figure className="text-center">
                      <img src="/images/santi.jpg" className="rounded-square" alt="Team Member 3" />
                      <figcaption>Santiago Garcia</figcaption>
                    </figure>
                  </div>
                  <div className="col-md-6">
                    <figure className="text-center">
                      <img src="/images/micka.jpg" className="rounded-square" alt="Team Member 4" />
                      <figcaption>Michaella Nsumanyi</figcaption>
                    </figure>
                  </div>
                </div>
              )}
              {teamMember === 'team2' && (
                <div className="row">
                  <div className="col-md-6">
                    <figure className="text-center">
                      <img src="/images/placeholder.jpg" className="rounded-square" alt="Team Member 1" />
                      <figcaption>Placeholder 1</figcaption>
                    </figure>
                  </div>
                  <div className="col-md-6">
                    <figure className="text-center">
                      <img src="/images/placeholder.jpg" className="rounded-square" alt="Team Member 2" />
                      <figcaption>Placeholder 2</figcaption>
                    </figure>
                  </div>
                  <div className="col-md-6">
                    <figure className="text-center">
                      <img src="/images/placeholder.jpg" className="rounded-square" alt="Team Member 3" />
                      <figcaption>Placeholder 3</figcaption>
                    </figure>
                  </div>
                  <div className="col-md-6">
                    <figure className="text-center">
                      <img src="/images/placeholder.jpg" className="rounded-square" alt="Team Member 4" />
                      <figcaption>Placeholder 4</figcaption>
                    </figure>
                  </div>
                </div>
              )}
            </div>
          )}
        </div>
      );
    }

    ReactDOM.render(<App />, document.getElementById('root'));
  </script>

</body>

</html>
