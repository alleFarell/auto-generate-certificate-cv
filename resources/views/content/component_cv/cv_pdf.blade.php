<style>
    @font-face {
        font-family: georgia;
        src: url('css/font/georgia.ttf');
    }
    #name{
        text-align: center;
        letter-spacing: 2px;
        font-family: georgia;
    }
    .header ul{
        list-style-type: none;
        padding-inline-start: 0px;
        margin: 3px;
    }
    .header li{
        display: inline;
    }
    .personal_info{
        text-align: center;
    }
    body{
        background-color: #f9f9f9;
    }
    .header{
        margin-top:50px;
    }

</style>

<page>
    <div class="header">
        <div id="name">
            <h2>{{strtoupper("Muhamad Farell Ambiar")}}</h2>
        </div>
        <div class="personal_info">
            <ul>
                <li>Bogor, Indonesia</li>
                <li>|</li>
                <li>+6281219643829</li>
            </ul>
        </div>
        <div class="personal_info">
            <ul>
                <li>ambiar.farell@gmail.com</li>
                <li>|</li>
                <li>github.com/alleFarell</li>
            </ul>
        </div>
        <hr>
    </div>
    <div class="profile">
        <div class="education">
            <table>
                <tr>
                    <td colspan="2">
                        <h4>Education</h4>
                    </td>
                </tr>
                <!-- start loop here -->
                <tr>
                    <td style="vertical-align: top;">
                        <p>Aug 2018 - Apr 2022</p>
                    </td>
                    <td style="text-align: left;">
                        <b>Computer Science</b>
                        <p>Telkom University</p>
                    </td>
                </tr>
                <!-- end of loop -->
            </table>
        </div>
        <div class="skills">
            <table>
                <tr>
                    <td style="vertical-align: top;">
                        <h4>Skills</h4>
                    </td>
                    <td>
                        <ul>
                            <li>PHP</li>
                            <li>Agile Scrum</li>
                            <li>Data Science</li>
                            <li>Java</li>
                            <li>C++</li>
                            <li>Python</li>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>
    </div>

</page>