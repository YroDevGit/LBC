import ReactDOM from 'react-dom'
import './index.css';
import reportWebVitals from './reportWebVitals';
import App from './App';
import Datas from './homepage'
import React, { useEffect } from 'react';


// Link: landing>footer>developer
try{
  

  ReactDOM.render(
    <React.StrictMode>
      <Datas values={"email"} />
    </React.StrictMode>,
    document.getElementById('developer')
  );
  
  
  
  // Link: Landing>footer>schedules
  const schedules = ReactDOM.createRoot(document.getElementById('schedules'));
  schedules.render(
  <div className="d-flex flex-column p-4 ps-5 text-dark border border-primary" style={{ borderRadius: '50% 20% / 10% 40%' }}>
      <p>Monday: N/A</p>
      <p>Tuesday: N/A</p>
      <p>Wednesfay: Prayer Meeting 5pm</p>
      <p>Thursday: N/A</p>
      <p>Friday: Praise and worship practice</p>
      <p>Saturday: N/A</p>
      <p className="mb-0">Sunday: Closed</p>
  </div>
  );
  
  // Link: Landing>footer>schedules
  const gcash = ReactDOM.createRoot(document.getElementById('gcash'));
  gcash.render(
  <img src="img/gcash.png" className="" alt="gcash" height="300" width="300"></img>
  );
  
  
  const socialmedia = ReactDOM.createRoot(document.getElementById('socialmedia'));
  socialmedia.render(
    
    <div className="footer-icon d-flex">
      <a className="btn btn-primary btn-sm-square me-3 rounded-circle text-white" href="#" aria-label="Facebook"><i className="fab fa-facebook-f"></i></a>
      <a className="btn btn-primary btn-sm-square me-3 rounded-circle text-white" href="#" aria-label="Twitter"><i className="fab fa-twitter"></i></a>
      <a className="btn btn-primary btn-sm-square me-3 rounded-circle text-white" href="#" aria-label="Instagram"><i className="fab fa-instagram"></i></a>
      <a className="btn btn-primary btn-sm-square rounded-circle text-white" href="#" aria-label="LinkedIn"><i className="fab fa-linkedin-in"></i></a>
    </div>
  );

}
catch(error){
  console.error('An error occurred while rendering:', error);
}







// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
