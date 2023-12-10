<style>
    @import url('https://fonts.googleapis.com/css2?family=Archivo+Black&family=Archivo+Narrow:wght@400;700&family=Archivo:wght@100;400;700&display=swap');
    
    :root {
        --dark-gray: #444;
        --color2: #f19773;
        
    }
    
    html {
        box-sizing: border-box;
        font-family: 'Archivo';
        color: var(--dark-gray);
        scroll-behavior: smooth;
    }
    
    * {
        box-sizing: inherit;
    }
    
    .wrapper {
        width: 8.5in;
        /* border: 1px solid var(--dark-gray); */
        transform: translateX(0rem);
    }
    
    .letterV {
        width: 8.5in;
        height: 11in;
    }
    
    .letterH {
        width: 11in;
        height: 8.5in;
    }
    
    .letterV,
    .letterH {
        border: 1px solid #f00;
        position: fixed;
        top: 8px;
        left: 8px;
    }
    
    .page {
        border: 1px solid #333;
        height: 66rem;
        margin-bottom: 3rem;
    }
    
    .page header {
        display: grid;
        grid-template-columns: 1fr 1fr;
        margin-bottom: 3rem;
    }
    
    .lectivo-importante {
        height: 25px;
    }
    
    .lectivo-importante:not(:empty) {
        padding: .25rem 1rem;
        border-radius: .3rem;
        font-weight: 900;
        text-align: center;
        width: max-content;
        margin: auto;
        background-color: var(--color2);
        color: #fff;
        transform: translateY(0.5rem);
    }
        
    .fecha {
        text-align: center;
        font-size: 8rem;
        font-weight: 100;
        grid-column: 1/-1;
        margin: 0rem;
    }
    
    .weekday-AMSADay {
        text-align: center;
        font-weight: 900;
        /* padding: 0 0 0.75rem; */
    }
    
    main {
        display: grid;
        grid-template-columns: repeat(5,max-content) 1fr;
        gap: 1rem;
    }
    
    .bloques-times {
        font-family: 'Archivo Narrow';
        font-weight: 900;
        color: #777;
    }
    
    .bloques-names>div {
        background-color: var(--dark-gray);
        background-color: var(--color2);
        color: #fff;
        height: max-content;
        font-family: 'Archivo';
        border-radius: 50%;
        border: 1px solid #777;
        padding: 0.8ch 0.5ch;
        font-weight: 900;
        text-align: center;
    }
    
    .bloques-class {
        font-size: 3rem;
        font-family: 'Archivo Black';
        text-align: center;
    }
    
    .bloques-rooms {
        transform: translate(0rem, 0.2rem);
    }
    
    .bloques-counts {
        transform: translate(-1rem, 1.5rem) !important;
    }
    
    
    [id^="f"]:nth-of-type(2n - 1) .bloques-class {
        transform: translate(2.3rem, -.5rem) !important;
    }
    
    [id^="f"]:nth-of-type(2n) .bloques-class {
        transform: translate(1.2rem, -0.5rem) !important;
    }
    
    [id^="f"]:nth-of-type(2n - 1) .bloques-counts {
        transform: translate(0.4rem, 1.4rem) !important;
    }
    
    .bloques-counts,
    .bloques-rooms {
        font-family: 'Archivo Narrow';
    }
    
    .bloques > div {
        display: grid;
        grid-template-rows: repeat(8, 5.9rem);
    }
    
    .bloques-misc {
        transform: translate(-16rem, -1.25rem);
        width: 145%;
    }
    
    .bloques-misc > div {
        border-bottom: 1px solid #3333;
    }
    
    .bloques-misc > div:first-of-type {
        border-top: 1px solid #3333;
    }
    
    footer {
        padding: 1rem 0 0;
        display: grid;
        grid-template-columns: 1fr 1fr;
    }
    
    .traffic-duty:empty {
        height: 1em;
        padding: .25rem 1rem;
    }
    
    .traffic-duty:not(:empty) {
        padding: .25rem 1rem;
        width: max-content;
        margin: auto;
        background-color: var(--color2);
        border-radius: .3rem;
        color: #fff;
        font-weight: 900;
    }
    
    .no-school>div:nth-of-type(26),
    .no-school>div:nth-of-type(25),
    .no-school>div:nth-of-type(24),
    .no-school>div:nth-of-type(21),
    .no-school>div:nth-of-type(20),
    .no-school>div:nth-of-type(19),
    .no-school>div:nth-of-type(15),
    .no-school>div:nth-of-type(14),
    .no-school>div:nth-of-type(13),
    .no-school>div:nth-of-type(12),
    .no-school>div:nth-of-type(11),
    .no-school>div:nth-of-type(10),
    .no-school>div:nth-of-type(9),
    .no-school>div:nth-of-type(8),
    .no-school>div:nth-of-type(7) {
        display: none;
    }
    
    .no-school-important-dates {
        padding: 0rem 2rem;
    }
    
    .no-school-important-dates div div > span {
        display: inline-block;
    }
    
    .no-school-important-dates div div > span:nth-of-type(1) {
        width: 8rem;
        font-family: 'Archivo Narrow';
        text-align: right;
        margin-right: 1rem;
        font-size: 1.15rem;
    }
    
    .no-school-important-dates div div > span:nth-of-type(2) {
        width: 14rem;
    }
    
    .no-school-important-dates a:hover {
        text-decoration: underline;
    }
    
    .no-school-important-dates a {
        text-decoration: none;
        color: var(--color2);
        font-weight: 900;
    }
    
    div.Day_1,
    div.Term.End {
        opacity: .9;
        font-weight: 900;
        border-bottom: 1px solid #ccc;
        border-top: 1px solid #ccc;
    }
    
    .Term.Warnings {
        opacity: .9;
    }
    
    .Grades.Due {
        opacity: .8;
    }
    
    .MCAS > .bloques-rooms > div:nth-of-type(4),
    .MCAS > .bloques-rooms > div:nth-of-type(3),
    .MCAS > .bloques-rooms > div:nth-of-type(2),
    .MCAS > .bloques-rooms > div:nth-of-type(1),
    .MCAS > .bloques-counts > div:nth-of-type(4),
    .MCAS > .bloques-counts > div:nth-of-type(3),
    .MCAS > .bloques-counts > div:nth-of-type(2),
    .MCAS > .bloques-counts > div:nth-of-type(1),
    .MCAS > .bloques-class > div:nth-of-type(4),
    .MCAS > .bloques-class > div:nth-of-type(3),
    .MCAS > .bloques-class > div:nth-of-type(2),
    .MCAS > .bloques-class > div:nth-of-type(1),
    .MCAS > .bloques-times > div:nth-of-type(4),
    .MCAS > .bloques-times > div:nth-of-type(3),
    .MCAS > .bloques-times > div:nth-of-type(2),
    .MCAS > .bloques-times > div:nth-of-type(1),
    .MCAS > .bloques-names > div:nth-of-type(4),
    .MCAS > .bloques-names > div:nth-of-type(3),
    .MCAS > .bloques-names > div:nth-of-type(2),
    .MCAS > .bloques-names > div:nth-of-type(1) {
        opacity: .3;
    }
    
    .Half_Day > .bloques-rooms > div:nth-of-type(8),
    .Half_Day > .bloques-rooms > div:nth-of-type(7),
    .Half_Day > .bloques-rooms > div:nth-of-type(6),
    .Half_Day > .bloques-rooms > div:nth-of-type(5),
    .Half_Day > .bloques-counts > div:nth-of-type(8),
    .Half_Day > .bloques-counts > div:nth-of-type(7),
    .Half_Day > .bloques-counts > div:nth-of-type(6),
    .Half_Day > .bloques-counts > div:nth-of-type(5),
    .Half_Day > .bloques-class > div:nth-of-type(8),
    .Half_Day > .bloques-class > div:nth-of-type(7),
    .Half_Day > .bloques-class > div:nth-of-type(6),
    .Half_Day > .bloques-class > div:nth-of-type(5),
    .Half_Day > .bloques-times > div:nth-of-type(8),
    .Half_Day > .bloques-times > div:nth-of-type(7),
    .Half_Day > .bloques-times > div:nth-of-type(6),
    .Half_Day > .bloques-times > div:nth-of-type(5),
    .Half_Day > .bloques-names > div:nth-of-type(8),
    .Half_Day > .bloques-names > div:nth-of-type(7),
    .Half_Day > .bloques-names > div:nth-of-type(6),
    .Half_Day > .bloques-names > div:nth-of-type(5) {
        opacity: .3;
    }
    
    .important-dates .verify {
        color: red !important;
    }
    
    .schedule h1 {
        text-align: center;
        margin-bottom: 5rem;
    }
    
    .schedule .class {
        font-family: 'Archivo Black';
        font-size: 2rem;
    }
    
    .owner h1 {
        font-size: 4rem;
        font-family: 'Archivo Black';
    }
    
    .bloques-class .G2, 
    .bloques-class .B2, 
    .bloques-class .F1, 
    .bloques-class .E1, 
    .bloques-class .A1, 
    .schedule .G2 .class,
    .schedule .B2 .class,
    .schedule .F1 .class,
    .schedule .E1 .class,
    .schedule .A1 .class {
        opacity: .25;
    }
    
    .bloques-class .H1, 
    .bloques-class .H2, 
    .schedule .H1 .class,
    .schedule .H2 .class {
        opacity: .5;
    }
    
    .bloques-class .C1, 
    .bloques-class .C2, 
    .schedule .C1 .class,
    .schedule .C2 .class {
        opacity: .75;
    }
    
    .schedule .block {
        font-family: 'Archivo';
        color: var(--color2);
        font-weight: 900;
        padding: .5rem;
        display: inline-block;
    }
    
    .grid-schedule > div > div {
        color: #333 !important;
        border-bottom: 1px solid #3338;
        padding-top: .75rem;
        padding-bottom: 0.2rem;
        position: relative;
        box-shadow: 2px 1px 0px 0px #3331;
    }
    
    .grid-schedule {
        display: grid;
        grid-template-columns: 4rem repeat(8, 1fr);
        margin-bottom: 6rem;
        transform: rotate(-90deg) translate(-6rem, -2rem);
        transform-origin: 50% 50%;
    }
    
    .day-header {
        display: grid;
        grid-template-columns: 4rem repeat(8, 1fr);
        text-align: center;
        /* color: var(--dark-gray); */
        color: red !important;
        font-weight: 900;
        opacity: 0.65;
    }
    
    .bloques .bloques-names div {position: relative; }
    
    .Day1 .bloques .bloques-names div:nth-of-type(5)::after {content: '(0)';color: #333;}
    .Day2 .bloques .bloques-names div:nth-of-type(5)::after {content: '(3)';color: #333;}
    .Day3 .bloques .bloques-names div:nth-of-type(5)::after {content: '(3)';color: #333;}
    .Day4 .bloques .bloques-names div:nth-of-type(5)::after {content: '(2)';color: #333;}
    .Day5 .bloques .bloques-names div:nth-of-type(5)::after {content: '(0)';color: #333;}
    .Day6 .bloques .bloques-names div:nth-of-type(5)::after {content: '(0)';color: #333;}
    .Day7 .bloques .bloques-names div:nth-of-type(5)::after {content: '(1)';color: #333;}
    .Day8 .bloques .bloques-names div:nth-of-type(5)::after {content: '(3)';color: #333;}
    
    div .bloques .bloques-names div::after {
        position: absolute;
        bottom: 0.9rem;
        right: 2.3rem;
        color: var(--color2) !important;
    }
    
    .grid-schedule .day1 div:nth-of-type(5)::after { content: '(0)'; }
    .grid-schedule .day2 div:nth-of-type(5)::after { content: '(3)'; }
    .grid-schedule .day3 div:nth-of-type(5)::after { content: '(3)'; }
    .grid-schedule .day4 div:nth-of-type(5)::after { content: '(2)'; }
    .grid-schedule .day5 div:nth-of-type(5)::after { content: '(0)'; }
    .grid-schedule .day6 div:nth-of-type(5)::after { content: '(0)'; }
    .grid-schedule .day7 div:nth-of-type(5)::after { content: '(1)'; }
    .grid-schedule .day8 div:nth-of-type(5)::after { content: '(3)'; }
    
    .grid-schedule .day1 div:nth-of-type(5)::after,
    .grid-schedule .day2 div:nth-of-type(5)::after,
    .grid-schedule .day3 div:nth-of-type(5)::after,
    .grid-schedule .day4 div:nth-of-type(5)::after,
    .grid-schedule .day5 div:nth-of-type(5)::after,
    .grid-schedule .day6 div:nth-of-type(5)::after,
    .grid-schedule .day7 div:nth-of-type(5)::after,
    .grid-schedule .day8 div:nth-of-type(5)::after {
        position: absolute;
        top: .75rem;
        right: 4.1rem;
        font-size: .8rem;
        color: #3339
    }
    
    .lunch-times { 
        text-align: center;
        transform: rotate(-90deg) translate(314px, 352px);
    }
    
    .class-times, .day1, .day2, .day3, .day4, .day5, .day6, .day7, .day8 {
        display: grid;
        grid-template-rows: repeat(8,4rem);
    }
    
    .class-time span{
        opacity: .6;
    }
    
    .class-time {
        padding-right: 1rem;
        font-weight: 900;
    }
    
    .class-times {
        text-align: right;
        font-family: 'Archivo Narrow';
    }
    
    h1 span {
        font-size: 3rem;
        
    }
    
    [id^="f"]:nth-of-type(2n - 1) .days-left {
        text-align: right;
        padding-right: 1.25rem;
    }
    
    [id^="f"]:nth-of-type(2n - 1) {
    }
    
    [id^="f"]:nth-of-type(2n) .days-left {
        padding-left: 1.25rem;
    }
    
    .days-left {
        text-align: left;
        font-weight: 900;
    }
    
    [id^="f"]:nth-of-type(2n) .bloques-times,
    [id^="f"]:nth-of-type(2n) .bloques-names,
    [id^="f"]:nth-of-type(2n) .bloques-class,
    [id^="f"]:nth-of-type(2n) .bloques-rooms,
    [id^="f"]:nth-of-type(2n) .bloques-counts {
        transform: translateX(1rem);
    }
    
    [id^="f"]:nth-of-type(2n - 1) .bloques-times,
    [id^="f"]:nth-of-type(2n - 1) .bloques-names,
    [id^="f"]:nth-of-type(2n - 1) .bloques-class,
    [id^="f"]:nth-of-type(2n - 1) .bloques-rooms,
    [id^="f"]:nth-of-type(2n - 1) .bloques-counts {
        transform: translateX(2.5rem);
    }

    .hide  {
        display: none;  
    }
    
    .center {
        text-align: center;
    }
    
    .wide {
        grid-column: 1/-1;
    }
    
    .two-columns {
        display: grid;
        grid-template-columns: repeat(2,1fr);
    }
    
    @media print {
        body {
            margin: 0;
        }
        .page {
            border-color: transparent;
            margin-bottom: 0;
        }
        
        .wrapper {
            border-width: 0;
        }
        
        .letterV,
        .letterH {
            top: 0;
            left: 0;
            display: none;
        }
    }
    
    @media print { 
        div.page  {
            page-break-before: always;    
            page-break-after: always;    
        }
        
        .page {
            margin-bottom: 0 !important;
        }
        .no-print,
        .sample {
            display: none;
        }
    }
    
</style>