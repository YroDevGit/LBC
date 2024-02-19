import React, { useState, useEffect } from 'react';


function Datas({values}) {
  const [data, setData] = useState([]);

  useEffect(() => {
    fetch('api/datas')
      .then(response => response.json())
      .then(jsonData => {
        setData(jsonData); 
      })
      .catch(error => console.error('Error fetching data:', error));
  }, []);

  return (
   
        <span>
            {data.map((column, index) => (
                (values == "email") ? (
                    <a href={'mailto:'+column.email}>{column.email}</a>
                ) : (values == "phone") ? (
                    <a href={'tel:'+column.phone}>{column.phone}</a>
                ) :null
        ))}
        </span>
      
  );
}

export default Datas;
