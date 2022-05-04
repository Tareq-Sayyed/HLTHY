/*
    To make Navbar Responsive -- A CLICKABLE dropdown menu appears
    on smaller screens.
*/ 
const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if(bar){
    bar.addEventListener('click', () => {
        nav.classList.add('active');
    });
}
if(close){
    close.addEventListener('click', () => {
        nav.classList.remove('active');
    });
}

/*  
    Programs Description - Homepage
    Onclick, description appears.
*/
const bbb = document.getElementById('bbb');
var bbD = document.getElementById('bbD');
if(bbb){
    bbb.addEventListener('click', () =>{
        bbD.innerHTML = "  Bodybuilding is the use of progressive resistance exercise to control and develop one's muscles by muscle hypertrophy for aesthetic purposes. \n\n\nIt is distinct from similar activities such as powerlifting because it focuses on physical appearance instead of strength. Lightweight Baby!  ";
    });
}

const plb = document.getElementById('plb');
var plD = document.getElementById('plD');
if(bbb){
    plb.addEventListener('click', () =>{
        plD.innerHTML = "Powerlifting is a strength sport that consists of three attempts at maximal weight on three lifts: squat, bench press, and deadlift. As in the sport of Olympic weightlifting, it involves the athlete attempting a maximal weight single-lift effort of a barbell loaded with weight plates.";
    });
}

const clb = document.getElementById('clb');
var clD = document.getElementById('clD');
if(clb){
    clb.addEventListener('click', () =>{
        clD.innerHTML = "Calisthenics is a form of strength training consisting of a variety of movements that exercise large muscle groups, such as standing, grasping, pushing, etc. These exercises are often performed rhythmically and with minimal equipment, as bodyweight exercises.";
    });
}

/*
    Displaying the programs
    when Day number is clicked/tapped.
*/
    /* Bodybuilding Plans */
        /* Day 1 */
        const bbT1 = document.getElementById('bbT1');
        var bbP1 = document.getElementById('bbP1');
        if(bbT1){
            bbT1.addEventListener('click', () => {
                bbP1.innerHTML = `
                    <table>
                        <tr>
                            <th class="titleT">Exercise</th>
                            <th class="titleT">Sets</th>
                            <th class="titleT">Reps</th>
                        </tr>
                        <tr>
                            <th>Flat Benchpress</th>
                            <td>4</td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <th>Incline Benchpress</th>
                            <td>4</td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <th>Flyes</th>
                            <td>4</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <th>Tricep Pushdowns</th>
                            <td>4</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <th>Tricep Kickbacks</th>
                            <td>4</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <th>Overhead Press</th>
                            <td>4</td>
                            <td>10-12</td>
                        </tr>
                        <tr>
                            <th>Lateral Raises</th>
                            <td>4</td>
                            <td>10-12</td>
                        </tr>
                        <tr>
                            <th>Upright Rows </th>
                            <td>4</td>
                            <td>10-12</td>
                        </tr>
                    </table>`
            });
        }
        /* Day 2 */
        const bbT2 = document.getElementById('bbT2');
        var bbP2 = document.getElementById('bbP2');
        if(bbT2){
            bbT2.addEventListener('click', () => {
                bbP2.innerHTML = `
                <table>
                <tr>
                    <th class="titleT">Exercise</th>
                    <th class="titleT">Sets</th>
                    <th class="titleT">Reps</th>
                </tr>

                <tr>
                    <th>Lat Pulldowns</th>
                    <th>4</th>
                    <th>12</th>
                </tr>

                <tr>
                    <th> Seated Single Arm Rows</th>
                    <th>4</th>
                    <th>12</th>
                </tr>

                <tr>
                    <th>Bent Over Rows </th>
                    <th>4</th>
                    <th>12</th>
                </tr>

                <tr>
                    <th>Rear Delt Flyes </th>
                    <th>4</th>
                    <th>15</th>
                </tr>

                <tr>
                    <th>Preacher Curls </th>
                    <th>4</th>
                    <th>15</th>
                </tr>

                <tr>
                    <th>Hammer Curls </th>
                    <th>4</th>
                    <th>15</th>
                </tr>

                <tr>
                    <th>Concentration Curls </th>
                    <th>4</th>
                    <th>10</th>
                </tr>
            </table>`
            });
        }
        /* Day 3 */
        const bbT3 = document.getElementById('bbT3');
        var bbP3 = document.getElementById('bbP3');
        if(bbT3){
            bbT3.addEventListener('click', () => {
                bbP3.innerHTML = `
                <table>
                <tr>
                    <th class="titleT">Exercise</th>
                    <th class="titleT">Sets</th>
                    <th class="titleT">Reps</th>
                </tr>

                <tr>
                    <th> Squats </th>
                    <td> 5 </td>
                    <td> 10 </td>
                </tr>

                <tr>
                    <th> Leg extensions </th>
                    <td> 4 </td>
                    <td> 15 </td>
                </tr>

                <tr>
                    <th> Leg Curls </th>
                    <td> 4 </td>
                    <td> 15 </td>
                </tr>

                <tr>
                    <th> Hamstring Leg Press </th>
                    <td> 4 </td>
                    <td> 8-10 </td>
                </tr>

                <tr>
                    <th> Seated Calf Raise </th>
                    <td> 3 </td>
                    <td>  failure </td>
                </tr>

                <tr>
                    <th> Smith Machine Raises </th>
                    <td> 3 </td>
                    <td> failure </td>
                </tr>
            </table>`
            });
        }
        /* Day 4 */
        const bbT4 = document.getElementById('bbT4');
        var bbP4 = document.getElementById('bbP4');
        if(bbT4){
            bbT4.addEventListener('click', () => {
                bbP4.innerHTML = `
                <table>
                <tr>
                    <th class="titleT">Exercise</th>
                    <th class="titleT">Sets</th>
                    <th class="titleT">Reps</th>   
                </tr>
                <tr>
                    <th>Flat Dumbell Press</th> 
                    <td>4</td>
                    <td>12</td>
                </tr>

                <tr>
                    <th>Incline Dumbell Press</th> 
                    <td>4</td>
                    <td>12</td>
                </tr>

                <tr>
                    <th>Lat Pulldowns</th>
                    <td>4</td>
                    <td>12</td>
                </tr>

                <tr>
                    <th>Seated Rows</th> 
                    <td>4</td>
                    <td>12</td>
                </tr>

                <tr>
                    <th>Military Press</th> 
                    <td>4</td>
                    <td>10</td>
                </tr>

                <tr>
                    <th>Face Pulls</th>
                    <td>4</td>
                    <td>15</td>
                </tr>

                <tr>
                    <th>Tricep Pushdowns</th> 
                    <td>4</td>
                    <td>15</td>
                </tr>

                <tr>
                    <th>Tricep Kickbacks</th> 
                    <td>4</td>
                    <td>15</td>
                </tr>

                <tr>
                    <th>Dumbell Curls</th> 
                    <td>4</td>
                    <td>15</td>
                </tr>

                <tr>
                    <th>Hammer Curls</th> 
                    <td>4</td>
                    <td>12</td> 
                </tr>    
            </table>`
            });
        }

    /* Powerlifting Plans */
        /* Day 1 */
        const plT1 = document.getElementById('plT1');
        var plP1 = document.getElementById('plP1');
        if(plT1){
            plT1.addEventListener('click', () => {
                plP1.innerHTML = `
                <table>
                <tr>
                    <th class="titleT">Exercise</th>
                    <th class="titleT">Sets</th>
                    <th class="titleT">Reps</th>  
                </tr>

                <tr>
                    <th>Squats</th>
                    <td>5</td>
                    <td>8-10</td>
                </tr>

                <tr>
                    <th>Stiff Legged Deadlift</th>
                    <td>5</td>
                    <td>8-10</td>
                </tr>

                <tr>
                    <th>Leg Extension</th>
                    <td>4</td>
                    <td>15</td>
                </tr>

                <tr>
                    <th>Lying Leg Curls</th>
                    <td>4</td>
                    <td>12-15</td>
                </tr>

                <tr>
                    <th>Bulgarian Split Squats</th>
                    <td>4</td>
                    <td>8-10</td>
                </tr>
            </table>`
            });
        }
        /* Day 2 */
        const plT2 = document.getElementById('plT2');
        var plP2 = document.getElementById('plP2');
        if(plT2){
            plT2.addEventListener('click', () => {
                plP2.innerHTML = `
                <table>
                        <tr>
                            <th class="titleT">Exercise</th>
                            <th class="titleT">Sets</th>
                            <th class="titleT">Reps</th>  
                        </tr>

                        <tr>
                            <th>Flat Bench Press - 4 sets of 8-10</th>
                            <td>4</td>
                            <td>8-10</td>
                        </tr>

                        <tr>
                            <th>Close Grip Bench Press - 3 sets of 8-10</th>
                            <td>3</td>
                            <td>8-10</td>
                        </tr>

                        <tr>
                            <th>Vertical Chest Press - 4 sets of 12</th>
                            <td>4</td>
                            <td>12</td>
                        </tr>

                        <tr>
                            <th>Dips - 4 sets of 12-15</th>
                            <td>4</td>
                            <td>12-15</td>
                        </tr>

                        <tr>
                            <th>Weighted Pushups - 4 sets of 8-10</th>
                            <td>4</td>
                            <td>8-10</td>
                        </tr>

                        <tr>
                            <th>Skull Crushers - 4 sets of 8-10</th>
                            <td>4</td>
                            <td>10-12</td>
                        </tr>

                        <tr>
                            <th>Tricep Extensions - 4 sets of 8-10</th>
                            <td>4</td>
                            <td>10-12</td>
                        </tr>
                    </table>`
            });
        }
        /* Day 3 */
        const plT3 = document.getElementById('plT3');
        var plP3 = document.getElementById('plP3');
        if(plT2){
            plT3.addEventListener('click', () => {
                plP3.innerHTML = `
                <table>
                        <tr>
                            <th class="titleT">Exercise</th>
                            <th class="titleT">Sets</th>
                            <th class="titleT">Reps</th>  
                        </tr>

                        <tr>
                            <th>Deadlift</th>
                            <td>5</td>
                            <td>8-10</td>
                        </tr>
                        
                        <tr>
                            <th>RDLs</th>
                            <td>4</td>
                            <td>8-10</td>
                        </tr>

                        <tr>
                            <th>Weighted Pull Ups</th>
                            <td>4</td>
                            <td>12</td>
                        </tr>

                        <tr>
                            <th>Lat Pulldowns</th>
                            <td>4</td>
                            <td>12-15</td>
                        </tr>

                        <tr>
                            <th>Bent Over Rows</th>
                            <td>4</td>
                            <td>8-10</td>
                        </tr>

                        <tr>
                            <th>EZ-Barbell Curls</th>
                            <td>4</td>
                            <td>12-15</td>
                        </tr>

                        <tr>
                            <th>Hammer Curls</th>
                            <td>4</td>
                            <td>15</td>
                        </tr>
                    </table>`
            });
        }
        /* Day 4 */
        const plT4 = document.getElementById('plT4');
        var plP4 = document.getElementById('plP4');
        if(plT4){
            plT4.addEventListener('click', () => {
                plP4.innerHTML = `
                <table>
                        <tr>
                            <th class="titleT">Exercise</th>
                            <th class="titleT">Sets</th>
                            <th class="titleT">Reps</th>  
                        </tr>

                        <tr>
                            <th>Squats</th>
                            <td>5</td>
                            <td>8-10</td>
                        </tr>

                        <tr>
                            <th>Hack Squats</th>
                            <td>5</td>
                            <td>8-10</td>
                        </tr>

                        <tr>
                            <th>Deadlift</th>
                            <td>5</td>
                            <td>8-10</td>
                        </tr>

                        <tr>
                            <th>Stiff Legged Deadlift</th>
                            <td>5</td>
                            <td>8-10</td>
                        </tr>

                        <tr>
                            <th>Flat Bench Press</th>
                            <td>4</td>
                            <td>8-10</td>
                        </tr>

                        <tr>
                            <th>Close Grip Bench Press</th>
                            <td>4</td>
                            <td>8-10</td>
                        </tr>
                    </table>`
            });
        }


    /* Calisthenics Plans */
        /* Day 1 */
        const clT1 = document.getElementById('clT1');
        var clP1 = document.getElementById('clP1');
        if(clT1){
            clT1.addEventListener('click', () => {
                clP1.innerHTML = `
                <table>
                            <tr>
                                <th class="titleT">Exercise</th>
                                <th class="titleT">Reps</th>
                            </tr>
    
                            <tr>
                                <th>Pushups</th>
                                <td>12</td>
                            </tr>
    
                            <tr>
                                <th>Dips</th>
                                <td>10</td>
                            </tr>
    
                            <tr>
                                <th>Squats</th>
                                <td>20</td>
                            </tr>
    
                            <tr>
                                <th>L-sit Hold </th>
                                <td>10 seconds</td>
                            </tr>
    
                            <tr>
                                <th>Handstands</th>
                                <td>5 seconds</td>
                            </tr>
                        </table>`
            });
        }
        /* Day 2 */
        const clT2 = document.getElementById('clT2');
        var clP2 = document.getElementById('clP2');
        if(clT2){
            clT2.addEventListener('click', () => {
                clP2.innerHTML = `
                <table>
                            <tr>
                                <th class="titleT">Exercise</th>
                                <th class="titleT">Reps</th>
                            </tr>
    
                            <tr>
                                <th>Pushups</th>
                                <td>12</td>
                            </tr>
    
                            <tr>
                                <th>Dips</th>
                                <td>10</td>
                            </tr>
    
                            <tr>
                                <th>Squats</th>
                                <td>20</td>
                            </tr>
    
                            <tr>
                                <th>L-sit Hold </th>
                                <td>10 seconds</td>
                            </tr>
    
                            <tr>
                                <th>Handstands</th>
                                <td>5 seconds</td>
                            </tr>
                        </table>`
            });
        }
        /* Day 3 */
        const clT3 = document.getElementById('clT3');
        var clP3 = document.getElementById('clP3');
        if(clT2){
            clT3.addEventListener('click', () => {
                clP3.innerHTML = `
                <table>
                            <tr>
                                <th class="titleT">Exercise</th>
                                <th class="titleT">Reps</th>
                            </tr>
    
                            <tr>
                                <th>Pushups</th>
                                <td>12</td>
                            </tr>
    
                            <tr>
                                <th>Dips</th>
                                <td>10</td>
                            </tr>
    
                            <tr>
                                <th>Squats</th>
                                <td>20</td>
                            </tr>
    
                            <tr>
                                <th>L-sit Hold </th>
                                <td>10 seconds</td>
                            </tr>
    
                            <tr>
                                <th>Handstands</th>
                                <td>5 seconds</td>
                            </tr>
                        </table>`
            });
        }
        /* Day 4 */
        const clT4 = document.getElementById('clT4');
        var clP4 = document.getElementById('clP4');
        if(clT4){
            clT4.addEventListener('click', () => {
                clP4.innerHTML = `
                <table>
                            <tr>
                                <th class="titleT">Exercise</th>
                                <th class="titleT">Reps</th>
                            </tr>
    
                            <tr>
                                <th>Pushups</th>
                                <td>12</td>
                            </tr>
    
                            <tr>
                                <th>Dips</th>
                                <td>10</td>
                            </tr>
    
                            <tr>
                                <th>Squats</th>
                                <td>20</td>
                            </tr>
    
                            <tr>
                                <th>L-sit Hold </th>
                                <td>10 seconds</td>
                            </tr>
    
                            <tr>
                                <th>Handstands</th>
                                <td>5 seconds</td>
                            </tr>
                        </table>`
            });
        }
    
// About Us Page
var abtUs = document.getElementById('abt-us');
abtUs.innerHTML = `WE ARE HLTHY!!!!`;