<head>
  <style>
    * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

html {
  color: #333;
  font-family: "Josefin Sans";
  line-height: 1.5;
}

body {
  padding: 2rem 2.5rem;
  background: linear-gradient(#dfe0db, #dfe0db 50%, #fcebe1 50%, #fcebe1);
  /*   background: linear-gradient (#888, #888 50%, salmon 50%, salmon); */
}

h1 {
  font-size: 2rem;
  text-transform: uppercase;
}

h2 {
  font-size: 1.1rem;
  text-transform: uppercase;
  border-top: 1px solid #888;
  border-bottom: 1px solid #888;
  padding: 0.75rem 0;
  margin-bottom: 2rem;
}

h3 {
  font-size: 1rem;
  text-transform: uppercase;
  color: salmon;
}

p {
  line-height: 1.5;
}

section + section {
  margin-top: 2rem;
}

a {
  text-decoration: none;
  color: inherit;
}

ul {
  list-style: none;
}

.profile {
  text-align: center;
}

.profile img {
  border-radius: 9999px;
  width: 15rem;
  height: 15rem;
}

.profile p {
  color: #888;
  margin-bottom: 1rem;
  font-size: 1.25rem;
}

.contact ul {
  margin-top: -2rem;
}

.contact li {
  text-align: right;
  text-transform: uppercase;
  padding: 1rem;
  color: #888;
  border-bottom: 1px solid #888;
  font-size: 0.8rem;
}

.skills > ul {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 1rem;
}

.timeline .event + .event {
  padding-top: 1rem;
}

.timeline .event {
  display: grid;
  grid-template-columns: 5ch 1fr;
}

.timeline .content {
  border-left: 1px solid #888;
  padding-left: 1rem;
  margin-left: 1rem;
}

.content > h3 + p {
  margin-bottom: 1rem;
  color: #333;
}

.resume {
  display: grid;
  grid-template-columns: 40% 1fr;
  grid-gap: 4rem;
  background-color: white;
  padding: 3rem;
  max-width: 1000px;
  margin: auto;
}
  </style>
</head>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

<div class="resume">
  <div class="column">
    <section class="profile">
      <h1>{{$name}}</h1>
      <p><em>Software Engineer</em></p>
      <img src="https://joeschmoe.io/api/v1/abhinandan" alt="">
    </section>

    <section class="contact">
      <h2>Contact</h2>
      <ul>
        <li>{{$house}},{{$city}},{{$state}},{{$pincode}}</li>
        <li><a href="">{{$email}}</a></li>
        <li><a href="">{{$website}}</a></li>
        <li><a href=""> {{$mobile}}</a></li>
      </ul>
    </section>

    <section class="objectives">
      <p>
        
   
  
      </p>
    </section>

    <section class="socials">
      <ul>
        <li>{{$social1}}</li>
        <li>{{$social2}}</li>
        
      </ul>
    </section>

    <section class="skills">
      <h2>Capabilities/Skills</h2>
      <ul>
        <li>
          <h3>Professional</h3>
          <ul>
            <li>{{$ps1}}</li>
            <li>{{$ps2}}</li>
          </ul>
        </li>
        <li>
          <h3>Personal</h3>
          <ul>
            <li>{{$prs1}}</li>
            <li>{{$prs2}}</li>
          
          </ul>
        </li>
      </ul>
    </section>
  </div>

  <div class="column">
    <section class="education">
      <h2>Education</h2>
      <ul class="timeline">
        <li class="event">
          <span class="duration">{{$Gy}}</span>
          <div class="content">
            <h3>{{$GC}}</h3>
            <p><em>{{$GI}}</em></p>
           
            <p>{{$Gper}} %</p>
          </div>
        </li>
        <li class="event">
          <span class="duration">{{$PGy}}</span>
          <div class="content">
            <h3>{{$PGC}}</h3>
            <p><em>{{$PGI}}</em></p>
           
            <p>{{$PGper}} %</p>
          </div>
        </li>
      </ul>
    </section>

    <section class="experience">
      <h2>Experience</h2>
      {{$exp}}
    </section>
  </div>
</div>