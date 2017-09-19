# Securenger
<h3>Why did I build this?</h3>
    <p>Securenger is intended to be submitted as an assignment to the Capstone Project Course on Coursera ..</p>
    <p>
        <blockquote><small>Your task is to build a simple, secure messaging system. Users should be able to post messages to other user,
            and read messages sent to them. The system must be secure so no unauthorized people should be able to read a message.</small></blockquote></p>
</p>
                <h3>Shortcut to Evaulation Points</h3>
                   <p><blockquote><small>
                        Does the project have all the required pages and functionality?</small>
                    </blockquote></p>
                    <p>Yes. Login page, Registration page, Home (inbox) page, Message Sending page, Database Dump page, along with others. All working fine .. you can check my live demo <a href="https://streamable.com/1u23q">here</a> <p>
                    </p>
                    <p>
                        <blockquote><small>
                            How do you store the data?</small>
                        </blockquote>
                        <p>Data is being encryped before insertion in database using AES algorithm with a defined key. You can check the dump over <a href="http://securenger.herokuapp.com/dbdump">here</a> <p>
                        </p>
                        <p>
                            <blockquote><small>
                                Is it secure?</small>
                            </blockquote>
                            <p>I made sure while coding to not trust any user-input, so validation and sanitization takes place at (hopefully) every input field. <p>
                            </p>
                            <p>
                                <h3>Challenges I ran into</h3>
                                <p>Deploying to Heroku was pain for me. I was using MySQL as a DBMS and unfortunately Heroku only supports PostgreSQL, so I had to go all over the database implementation
                                    for more than once to make it work. <p>
                                </p>
                                <h3>Accomplishments that I'm proud of</h3>
                                <p>Finishing the project within a relatively small time frame. <p>
                                </p>
                                <h3>How did I build it?</h3>
                                <p>For the backend I used PHP Laravel Framework with DBMS PostgreSQL.</p>
                                <p>Frontend .. bootstrap ofcourse (didn't you notice)?</p>
