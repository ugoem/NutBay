# NutBay
*..Home of nature enthusiast..*


## [Landing Page](https://auenetengtech.com.ng/ugoem.tech)
![](https://auenetengtech.com.ng/alx/landing_page2.JPG)
![](https://auenetengtech.com.ng/alx/landing_page3.JPG)

# Description

NutBay is intended to be a social platform where professional nutritionist and herbalist conglomerate to share ideas about natural solution to several health challenges facing humankind. The sole purpose of the platform is to create a niche where those who believe specifically on the use of natural resources to advance and preserve human health, can connect freely with each other as well as the general public to offer free and paid services to their prospective beneficiaries.

## Deployed App
## [NutBay](https://auenetengtech.com.ng/ugoem.tech/app)

Announcing the NUTsBAY
...home of nature enthusiast....

10 minutes read...
Hey, I know you will be wondering what this is all about. Perhaps your guess is as good as mine. 
Below are the highlights of the areas covered in this blog. Feel free to skip to any section of your choice. 
Contents 
1.	Introduction
2.	My Story
3.	The structure of NUTsBAY and the Technologies behind it.
4.	Technical Challenges

1.	Introduction
NUTsBAY is a social platform where professional nutritionist, herbalist, and other nature enthusiasts, come together to share ideas about natural solution to several health challenges facing humankind. 
The name NUTsBAY, which is an abridged form of Nature's Bay, was inspired by my love for nature, and the beauty that do exist around seashore or riverbanks.
The sole purpose of the platform is to create a niche where those who believe specifically on the use of natural resources to advance and preserve human health, can connect freely with each other as well as the public to offer free and paid services to their prospective beneficiaries.
In my team, two of us, Nnenna and I have a strong affinity to natural things, while Karlie was a little less interested, but we got to work together anyway. We focused on creating a web and mobile friendly web solution experience, figure 1, for our target audience. 

Ugochukwu the team lead produced and presented the project wireframe for discussions among team members and handled the user experience interface design and the entire frontend outlook of the project.
Karlie took care of the server-side technology and database design. She equally stepped in fully when it’s time for deployment, such that the public can have a feel of what our project looks like, and Nnenna supercharged our blog from her wealth of experience running the Living Good Blog. 

These roles were chosen on a broader scale because they cover the major areas that needed to be taken care of for the aim of the project to be brought to fruition.
 
Figure 1: NUTsBAY Landing Page.

2.	My Story.
I grew up in the small village of Onu-ogba, located on the western outskirts of Enugu Town, Nigeria. As a kid, while growing up, I did follow my parents to farms where we cultivated different types of crops, tubers, shrubs, vegetables, etc. 
There were lots of fruits, nuts, and shrubs around the neighbourhood and I enjoyed feasting on them as well as all our other farm produce. This made me grow up very healthy, and hearty with strong cognitive ability. I realized that I hardly fell sick, but coming to the city at a later age, I lost access to some of those natural items partly due to location and cost at times. 
At adult age, after spending some years in the township, I came to realize that am no longer strong and healthy as I use to be those days...this aroused my curiosity and even though I had an engineering background at school, I began probing the connection between natural substances, human health, and cognitive ability.
When I figured out the relationship, I became an advocate of natural delicacies. Hence when we were asked to come up with a portfolio project, I thought it wise to create a platform that will be solemnly dedicated to nature enthusiasts. Using it as a medium to create awareness and grow people's thoughts and ideas about the importance of going natural in virtually all they consume. 
Sharing the idea with Nnenna one of my team members, she quickly jumped in because she was already running a blog dedicated to natural living called Living Good. (put a link here). And so, the idea was transformed into a web project called NUTsBAY.


3.	The structure of NUTsBAY and the Technologies behind it
The basic information flow on the NUTsBAY platform is as illustrated in figure 2 below. It is no different from standard web application information request process. 
 
Figure 2: NUTsBAY data flow process. 

The community interface is shown in figure 3 below. Here members can create contents and post on their timelines and everyone in the community gets to see and consume it depending on the visibility set by the content creator. 
 
Figure 3: Community user interface. 
Getting on board is as easy as ABCD. You just need to fill a simple form containing, names, email, phone number and password as shown in figure 4 below. The login interface and the process were equally implanted as shown in figure 5 below. We are working on implementing and integrating Facebook and google API to enable users from this community very easy access to come onboard. 

 
Figure 4: Signup page


 

Figure 5: Login page 

We adopted the following technologies to implement this project.
a.	PHP, AJAX – Utilized for backend logic development.
b.	MySQL database –Used for database design and development.
c.	HTML 5, Bootstrap, and CSS – Were used to design and develop the user interface of this project.
d.	JavaScript and JQuery – These technologies were used to handle client-side scripting and animated user interactions.
e.	Xamp – We used this as our local server to develop and test our application before deployment to online server. 
f.	PC – Personal Computer or Laptop, smartphone, or Wi-Fi hotspot device, to provide internet access.
g.	The Internet itself, from where other resources including books were obtained.
Python is a very good alternative to PHP, when it comes to backend development due to its ease of use and numerous readily deployable libraries, however PHP remains among the top 3 best programing languages around the world. 
This is because, it has large community of developers, very stable, large libraries, powers more than half the websites currently deployed on the Internet and offers the developer granular access to what is happening behind the hood during the software cycle.
 In the same vein MySQL database is a household name when it comes to web application development, owing to its relational feature and operational reliability. Also, the integration of MySQL into phpMyAdmin in Apache sever environment makes it easy for developers to design a complete database without having to write the query codes. 
However, other alternatives such as SQL, Django, Oracle, NoSQL are all database application software which could have been used, but each of them has other specialized areas where they are preferred such as in mobile app development and desktop and enterprise application system.  
Finally, the choice of these technologies was informed by their simplicity, access to bare bone structure of the application, ease of setup, and use when compared to Node.js, Angular, Vue, ionic, and Python framework whose dependencies are numerous and ever dynamic. 
Solutions developed using any of these frameworks are subject to breaking when new updates of any of the dependencies are released, except the application is promptly updated.  
4.	Technical Challenge encountered. 
The landing page had to be redesigned following challenges encountered with the previous design. We discovered the landing page was not responsive and thus does not display well on all devices hence the redesign.
We made use of the latest bootstrap plugin to fix the issue and the website now display properly. 
Another major challenge encountered during the process was upgrading my phpMyAdmin. A major upgrade was done to the software configuration file that the operation tab almost became non-functional.
I had to backup all my application databases, then download the updated version and install it. After the installation, I returned all the previous databases and tested them okay. Then went ahead to create the database for the portfolio project. Trying to upgrade it manually proved very cumbersome, and in a bit not to break things, I chose to reinstall the entire software.
Another challenge though not directly on the project, was my PC. It downloaded an automatic update that almost broke the operation. I had to roll back the installation before the issue was rectified.
Also, we tried embedding Google maps into the contact page of our application and hit a roadblock without a clue of what was happening, it took several hours of debugging before we were able to discover that a JavaScript file was interfering with the map code through the division container ID. Then we cleared the conflicting ID from the container ID and the map displayed nice. 

Thank you for reading my article and do have a great day. 

Anionovo, Ugochukwu 
Software Engineering student at ALX, Electrical Engineer, Freelancer, and University Teacher, at Nnamdi Azikiwe University, Awka Nigeria. Am very passionate about nature and loves to let others share it.
Follow me @
LinkedIn, Twitter
Have a look at the project here! 
GitHub project Repository
Deployed project page
Project’s landing page

