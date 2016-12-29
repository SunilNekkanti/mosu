// Navbar.jsx
// Handles login and logout logic
// Renders Navbar

import React from 'react';

export default class Navbar extends React.Component {
  constructor(props) {
    super(props);
    this.basicIsLoggedIn = this.basicIsLoggedIn.bind(this);
    this.logout = this.logout.bind(this);
  }

  // Only checks for existence of token, not actual valid login.
  basicIsLoggedIn() {
    if(localStorage.getItem("api_token")){
      return true;
    } else {
      return false;
    }
  }

  logout() {
    localStorage.removeItem("api_token");
    // Refresh the page
    window.location.href = "/";
  }

  render() {
    return (
      <nav className="navbar navbar-default">
        <div className="container-fluid">
          <div className="navbar-header">
            <a className="navbar-brand" href="#">
              <p className="mosu-logo">MOSU v0.2.1 alpha</p>
            </a>
          </div>
          { 
            this.basicIsLoggedIn() ?
            <div className="pull-right">
                <a 
                onClick={ this.logout }
                className="btn btn-secondary">Logout</a> 
            </div> : null
           }
        </div>
      </nav>
    );
  }
}