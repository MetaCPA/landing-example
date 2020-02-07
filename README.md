# Overview

#### Step-by-step
1. Installation
    - Clone this repository:
        ```sh
        git clone git@github.com:MetaCPA/landing-example.git
        ```
        OR
    - Download and unzip:
        ```sh
        https://github.com/MetaCPA/landing-example/archive/master.zip
        ```
2. Place the files in the root directory of the site
        `ex. /var/www/<your_domain>`
3. Create the flow in our system(<a href="http://metacpa.ru/flow/create">link</a>)
4. Сonfigure link with url params
    - URL<br />
      `http://<your_domain>/land.php`
    - URL Params<br />
      ***Required:*** <br />
         `flow_id` - Hash (which is specified in the column of <a href="https://metacpa.ru/flow/index">Flow page</a> with the 'Flow URL' header)<br />
         `geo` - Location code in our system (<a href="https://metacpa.ru/city/helper">location guide</a>)<br />
      ***Optional:*** <br />
         `sub1, …, sub5` - Can be used any own values
    - As a result, you will receive a link like:<br />
    `http://<your_domain>/land.php?flow_id=...&geo=...&sub1=...&sub2=...&sub3=...&sub4=...&sub5=...`
