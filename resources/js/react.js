

import React, { useState, useEffect } from 'react';

const Posts = () => {
    const [posts, setPosts] = useState([]);

    useEffect(() => {
        
        fetch('/api/events')
            .then(response => response.json())
            .then(data => setPosts(data.posts))
            .catch(error => console.error('No data found:', error));
    }, []);

    return (
        <div className="for-evt row col-mg3 pt10 pb10 overflow">
            <h2>Posts</h2>
            <div>
            <table className="evtable responsive fade-owl">
                <thead>
                <tr>
                <th>Event</th>
                <th>Venue</th>
                <th>Date</th>
                <th>Time</th>
                </tr>
                </thead>
                <tbody>
                {posts.map(post => (
                    <tr key={post.id} className="cell-val pd5 t-collapse">
                        <td>{post.evt}</td>
                        <td>{post.venue}</td>
                        <td>{post.edate}</td>
                        <td>{post.etime}</td>
                    </tr>    
                ))}
                </tbody>
                </table>
            </div>
        </div>
    );
};

export default Posts;


