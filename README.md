## Features
<ul>
    <li>User Registration and Login</li>
    <li>Authentication</li>
    <li>Password Reset</li>
    <li>User Profiles</li>
    <li>Post Creation with Text and Image Upload</li>
    <li>Post Viewing and Display</li>
    <li>User Timeline</li>
    <li>Liking and Unliking Posts</li>
    <li>Comenting on Posts</li>
    <li>Display of Likes and Comments</li>
    <li>Followers System</li>
</ul>

## Technologies Used
<ul>
    <li>Backend Framework: Laravel</li>
    <li>Frontend Framework: Blade Template, Bootstrap5</li>
    <li>Database: MySql</li>
</ul>

## Installation
<ol>
    <li>Clone the repository</li>
    <li>Run "composer install" to install PHP dependencies</li>
    <li> Run "php artisan migrate" to create the database tables</li>
    <li>Start the development server</li>
</ol>

## Screenshot
<table>
    <thead>
        <tr>
            <th>
                <img src="screenshots/login.png" alt="user login ss">
            </th>
            <th>
                <img src="screenshots/signup.png" alt="signup ss">
            </th>
        </tr>
    </thead>
</table>

<table>
    <thead>
        <tr>
            <th>
                <img src="screenshots/profile.png" alt="profile">
            </th>
            <th>
                <img src="screenshots/newsfeed.png" alt="newsfeed ss">
            </th>
        </tr>
    </thead>
</table>

<table>
    <thead>
        <tr>
            <th>
                <img src="screenshots/timeline.png" alt="timeline ss">
            </th>
            <th>
                <img src="screenshots/posts.png" alt="posts ss">
            </th>
        </tr>
    </thead>
</table>

## Tables and Columns
<table>
<tr>
    <th>Table Name</th>
    <th>Columns</th>
</tr>
<tr>
    <td>Users Table</td>
    <td>
        <ul>
            <li>id (Primary Key)</li>
            <li>username</li>
            <li>email</li>
            <li>password (Hashed)</li>
            <li>profile_picture</li>
        </ul>
    </td>
</tr>

<tr>
    <td>Posts Table</td>
    <td>
        <ul>
            <li>id (Primary Key)</li>
            <li>user_id (Foreign Key referencing Users)</li>
            <li>content (Text content of the post)</li>
            <li>image_path (Path to the uploaded image)</li>
            <li>created_at (Timestamp)</li>
            <li>updated_at (Timestamp)</li>
        </ul>
    </td>
</tr>

<tr>
    <td>Likes Table</td>
    <td>
        <ul>
            <li>id (Primary Key)</li>
            <li>user_id (Foreign Key referencing Users)</li>
            <li>post_id (Foreign Key referencing Posts)</li>
        </ul>
    </td>
</tr>
<tr>
    <td>Comments Table</td>
    <td>
        <ul>
            <li>id (Primary Key)</li>
            <li>user_id (Foreign Key referencing Users)</li>
            <li>post_id (Foreign Key referencing Posts)</li>
            <li>content (Text content of the comment)</li>
            <li>created_at (Timestamp)</li>
            <li>updated_at (Timestamp)</li>
        </ul>
    </td>
</tr>
<tr>
    <td>Followers Table</td>
    <td>
        <ul>
            <li>id (Primary Key)</li>
            <li>follower_id (Foreign Key referencing Users - User who follows)</li>
            <li>following_id (Foreign Key referencing Users - User being followed)</li>
        </ul>
    </td>
</tr>

</table>
<h2> Relationships:</h2>
<ul>
    <li>One User can have many Posts (One-to-Many relationship).</li>
    <li>One Post can have many Likes (One-to-Many relationship).</li>
    <li>One Post can have many Comments (One-to-Many relationship).</li>
    <li>One User can follow many Users, and a User can be followed by many Users (Many-to-Many relationship through the Followers Table).</li>
</ul>
