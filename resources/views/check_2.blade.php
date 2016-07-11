<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8">



<style type="text/css">
body {
  font-family: Helvetica, arial, sans-serif;
  font-size: 14px;
  line-height: 1.6;
  padding-top: 10px;
  padding-bottom: 10px;
  background-color: white;
  padding: 30px; }

body > *:first-child {
  margin-top: 0 !important; }
body > *:last-child {
  margin-bottom: 0 !important; }

a {
  color: #4183C4; }
a.absent {
  color: #cc0000; }
a.anchor {
  display: block;
  padding-left: 30px;
  margin-left: -30px;
  cursor: pointer;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0; }

h1, h2, h3, h4, h5, h6 {
  margin: 20px 0 10px;
  padding: 0;
  font-weight: bold;
  -webkit-font-smoothing: antialiased;
  cursor: text;
  position: relative; }

h1:hover a.anchor, h2:hover a.anchor, h3:hover a.anchor, h4:hover a.anchor, h5:hover a.anchor, h6:hover a.anchor {
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA09pVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoMTMuMCAyMDEyMDMwNS5tLjQxNSAyMDEyLzAzLzA1OjIxOjAwOjAwKSAgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OUM2NjlDQjI4ODBGMTFFMTg1ODlEODNERDJBRjUwQTQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OUM2NjlDQjM4ODBGMTFFMTg1ODlEODNERDJBRjUwQTQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5QzY2OUNCMDg4MEYxMUUxODU4OUQ4M0REMkFGNTBBNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5QzY2OUNCMTg4MEYxMUUxODU4OUQ4M0REMkFGNTBBNCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PsQhXeAAAABfSURBVHjaYvz//z8DJYCRUgMYQAbAMBQIAvEqkBQWXI6sHqwHiwG70TTBxGaiWwjCTGgOUgJiF1J8wMRAIUA34B4Q76HUBelAfJYSA0CuMIEaRP8wGIkGMA54bgQIMACAmkXJi0hKJQAAAABJRU5ErkJggg==) no-repeat 10px center;
  text-decoration: none; }

h1 tt, h1 code {
  font-size: inherit; }

h2 tt, h2 code {
  font-size: inherit; }

h3 tt, h3 code {
  font-size: inherit; }

h4 tt, h4 code {
  font-size: inherit; }

h5 tt, h5 code {
  font-size: inherit; }

h6 tt, h6 code {
  font-size: inherit; }

h1 {
  font-size: 28px;
  color: black; }

h2 {
  font-size: 24px;
  border-bottom: 1px solid #cccccc;
  color: black; }

h3 {
  font-size: 18px; }

h4 {
  font-size: 16px; }

h5 {
  font-size: 14px; }

h6 {
  color: #777777;
  font-size: 14px; }

p, blockquote, ul, ol, dl, li, table, pre {
  margin: 15px 0; }

hr {
  background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAECAYAAACtBE5DAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OENDRjNBN0E2NTZBMTFFMEI3QjRBODM4NzJDMjlGNDgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OENDRjNBN0I2NTZBMTFFMEI3QjRBODM4NzJDMjlGNDgiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4Q0NGM0E3ODY1NkExMUUwQjdCNEE4Mzg3MkMyOUY0OCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo4Q0NGM0E3OTY1NkExMUUwQjdCNEE4Mzg3MkMyOUY0OCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PqqezsUAAAAfSURBVHjaYmRABcYwBiM2QSA4y4hNEKYDQxAEAAIMAHNGAzhkPOlYAAAAAElFTkSuQmCC) repeat-x 0 0;
  border: 0 none;
  color: #cccccc;
  height: 4px;
  padding: 0;
}

body > h2:first-child {
  margin-top: 0;
  padding-top: 0; }
body > h1:first-child {
  margin-top: 0;
  padding-top: 0; }
  body > h1:first-child + h2 {
    margin-top: 0;
    padding-top: 0; }
body > h3:first-child, body > h4:first-child, body > h5:first-child, body > h6:first-child {
  margin-top: 0;
  padding-top: 0; }

a:first-child h1, a:first-child h2, a:first-child h3, a:first-child h4, a:first-child h5, a:first-child h6 {
  margin-top: 0;
  padding-top: 0; }

h1 p, h2 p, h3 p, h4 p, h5 p, h6 p {
  margin-top: 0; }

li p.first {
  display: inline-block; }
li {
  margin: 0; }
ul, ol {
  padding-left: 30px; }

ul :first-child, ol :first-child {
  margin-top: 0; }

dl {
  padding: 0; }
  dl dt {
    font-size: 14px;
    font-weight: bold;
    font-style: italic;
    padding: 0;
    margin: 15px 0 5px; }
    dl dt:first-child {
      padding: 0; }
    dl dt > :first-child {
      margin-top: 0; }
    dl dt > :last-child {
      margin-bottom: 0; }
  dl dd {
    margin: 0 0 15px;
    padding: 0 15px; }
    dl dd > :first-child {
      margin-top: 0; }
    dl dd > :last-child {
      margin-bottom: 0; }

blockquote {
  border-left: 4px solid #dddddd;
  padding: 0 15px;
  color: #777777; }
  blockquote > :first-child {
    margin-top: 0; }
  blockquote > :last-child {
    margin-bottom: 0; }

table {
  padding: 0;border-collapse: collapse; }
  table tr {
    border-top: 1px solid #cccccc;
    background-color: white;
    margin: 0;
    padding: 0; }
    table tr:nth-child(2n) {
      background-color: #f8f8f8; }
    table tr th {
      font-weight: bold;
      border: 1px solid #cccccc;
      margin: 0;
      padding: 6px 13px; }
    table tr td {
      border: 1px solid #cccccc;
      margin: 0;
      padding: 6px 13px; }
    table tr th :first-child, table tr td :first-child {
      margin-top: 0; }
    table tr th :last-child, table tr td :last-child {
      margin-bottom: 0; }

img {
  max-width: 100%; }

span.frame {
  display: block;
  overflow: hidden; }
  span.frame > span {
    border: 1px solid #dddddd;
    display: block;
    float: left;
    overflow: hidden;
    margin: 13px 0 0;
    padding: 7px;
    width: auto; }
  span.frame span img {
    display: block;
    float: left; }
  span.frame span span {
    clear: both;
    color: #333333;
    display: block;
    padding: 5px 0 0; }
span.align-center {
  display: block;
  overflow: hidden;
  clear: both; }
  span.align-center > span {
    display: block;
    overflow: hidden;
    margin: 13px auto 0;
    text-align: center; }
  span.align-center span img {
    margin: 0 auto;
    text-align: center; }
span.align-right {
  display: block;
  overflow: hidden;
  clear: both; }
  span.align-right > span {
    display: block;
    overflow: hidden;
    margin: 13px 0 0;
    text-align: right; }
  span.align-right span img {
    margin: 0;
    text-align: right; }
span.float-left {
  display: block;
  margin-right: 13px;
  overflow: hidden;
  float: left; }
  span.float-left span {
    margin: 13px 0 0; }
span.float-right {
  display: block;
  margin-left: 13px;
  overflow: hidden;
  float: right; }
  span.float-right > span {
    display: block;
    overflow: hidden;
    margin: 13px auto 0;
    text-align: right; }

code, tt {
  margin: 0 2px;
  padding: 0 5px;
  white-space: nowrap;
  border: 1px solid #eaeaea;
  background-color: #f8f8f8;
  border-radius: 3px; }

pre code {
  margin: 0;
  padding: 0;
  white-space: pre;
  border: none;
  background: transparent; }

.highlight pre {
  background-color: #f8f8f8;
  border: 1px solid #cccccc;
  font-size: 13px;
  line-height: 19px;
  overflow: auto;
  padding: 6px 10px;
  border-radius: 3px; }

pre {
  background-color: #f8f8f8;
  border: 1px solid #cccccc;
  font-size: 13px;
  line-height: 19px;
  overflow: auto;
  padding: 6px 10px;
  border-radius: 3px; }
  pre code, pre tt {
    background-color: transparent;
    border: none; }

sup {
    font-size: 0.83em;
    vertical-align: super;
    line-height: 0;
}
* {
    -webkit-print-color-adjust: exact;
}
@media screen and (min-width: 914px) {
    body {
        width: 854px;
        margin:0 auto;
    }
}
@media print {
    table, pre {
        page-break-inside: avoid;
    }
    pre {
        word-wrap: break-word;
    }
}
</style>

<style type="text/css">
/**
 * prism.js default theme for JavaScript, CSS and HTML
 * Based on dabblet (http://dabblet.com)
 * @author Lea Verou
 */

code[class*="language-"],
pre[class*="language-"] {
    color: black;
    background: none;
    text-shadow: 0 1px white;
    font-family: Consolas, Monaco, 'Andale Mono', 'Ubuntu Mono', monospace;
    text-align: left;
    white-space: pre;
    word-spacing: normal;
    word-break: normal;
    word-wrap: normal;
    line-height: 1.5;

    -moz-tab-size: 4;
    -o-tab-size: 4;
    tab-size: 4;

    -webkit-hyphens: none;
    -moz-hyphens: none;
    -ms-hyphens: none;
    hyphens: none;
}

pre[class*="language-"]::-moz-selection, pre[class*="language-"] ::-moz-selection,
code[class*="language-"]::-moz-selection, code[class*="language-"] ::-moz-selection {
    text-shadow: none;
    background: #b3d4fc;
}

pre[class*="language-"]::selection, pre[class*="language-"] ::selection,
code[class*="language-"]::selection, code[class*="language-"] ::selection {
    text-shadow: none;
    background: #b3d4fc;
}

@media print {
    code[class*="language-"],
    pre[class*="language-"] {
        text-shadow: none;
    }
}

/* Code blocks */
pre[class*="language-"] {
    padding: 1em;
    margin: .5em 0;
    overflow: auto;
}

:not(pre) > code[class*="language-"],
pre[class*="language-"] {
    background: #f5f2f0;
}

/* Inline code */
:not(pre) > code[class*="language-"] {
    padding: .1em;
    border-radius: .3em;
    white-space: normal;
}

.token.comment,
.token.prolog,
.token.doctype,
.token.cdata {
    color: slategray;
}

.token.punctuation {
    color: #999;
}

.namespace {
    opacity: .7;
}

.token.property,
.token.tag,
.token.boolean,
.token.number,
.token.constant,
.token.symbol,
.token.deleted {
    color: #905;
}

.token.selector,
.token.attr-name,
.token.string,
.token.char,
.token.builtin,
.token.inserted {
    color: #690;
}

.token.operator,
.token.entity,
.token.url,
.language-css .token.string,
.style .token.string {
    color: #a67f59;
    background: hsla(0, 0%, 100%, .5);
}

.token.atrule,
.token.attr-value,
.token.keyword {
    color: #07a;
}

.token.function {
    color: #DD4A68;
}

.token.regex,
.token.important,
.token.variable {
    color: #e90;
}

.token.important,
.token.bold {
    font-weight: bold;
}
.token.italic {
    font-style: italic;
}

.token.entity {
    cursor: help;
}
</style>


</head>

<body>

<p>喵的检查</p>

<ul>
<li>姓名：kirineko</li>
<li>昵称：雾喵</li>
</ul>

<p>亲爱的主管:</p>

<p>烬酱，喵瞌睡，好困啊，喵，眼睛就睁不开啊QmQ,烬酱。喵就拖欠烬酱检查一个多星期啦。呜呜。上周五，烬酱说来武汉找喵，喵就开心，由于烬酱就宠爱喵，喵就嚣张起来，就任性没给烬酱买回大连的票，烬酱要喵写检查，喵也没有写，总之喵就嚣张死啦。</p>

<p>喵就是嚣张，欠调教了。</p>

<p>“说真的，你这个周末可能会过的很惨！”，烬酱如此提醒喵。果然，嚣张的猫咪在这个周末被进行了十分严厉的调教。</p>

<p>啊呜，烬酱，喵是烬酱的m啊，喵好瞌睡啊，眼睛真的睁不开了喵。，啊，啊，啊，啊，，啊，啊，呜呜，现在已经是闭上眼睛在写啦。</p>

<p>周五晚。烬酱带着她的喵进了家门。喵刚刚上床，突然，趁喵完全还没有反应过来，烬酱就突然把喵扑倒到床上。喵就这样被烬酱完全压在了身下。喵的双手被烬酱压制着，根本无法动弹，烬酱两只手开始在喵的身体上肆虐着，啊，“烬酱，喵错啦，不要啊。”，喵敏感的身体马上就受不了啦，可是烬酱根本不理会喵的挣扎，继续狂风暴雨般的肆虐着，啊啊，“啊，烬酱，喵，不行啦，好痒，喵，啊，啊，喵喘不过气啦，烬酱，喵错啦，让喵歇一会儿啦，啊啊”，喵挣扎着。“说，你错哪了”，烬酱说着，可是双手完全没有听，继续抚摸着喵的腰部，“你不说就是不知道错了”，啊，说着，烬酱变本加厉的调教着喵，喵已经完全喘不过气来了，可是烬酱不仅没有停止手上的动作，反而加快了对喵的抚摸，腰，脖子，乳头，还有已经硬了的少女的贞操，啊，完全抵挡不住烬酱的攻势，“喵真的不行啦啊，喘不过气啦，烬酱”，“这还只是开始呢，今晚就是要虐喵，就准备好了要虐喵，这就不行了，一会儿怎么办”，“呜呜，烬酱，想睡啊，喵”，“你今晚不用睡了，真的不用睡了”，烬酱这样说着，手上的动作丝毫没有停止的征兆。直到喵精疲力尽了，完全喘不过来了，烬酱才停了下来。</p>

<p>“啊啊，啊，啊，啊，”，喵大口的喘着气，感觉身体已经不属于自己了，身体已经被烬酱掏空了，喵喘着气，烬酱压在喵的身上，“记得你还是我的m呢”，喵又不自觉地兴奋了起来，呜呜，简直没有救了，说着，又是烬酱的一波攻势。接着，烬酱从书包里拿出了一个奇怪的东西————针筒，啊，喵看到这么超级粗的针筒，已经吓了半死，啊，接着，烬酱拿出了灌肠用的导管，啊，啊，啊，喵又害怕又兴奋，作为烬酱的m要被烬酱灌肠了，QmQ，好兴奋，烬酱先把灌肠的导管插进了喵的后庭，烬酱的后庭调教开始了。这个灌肠用的针筒非常粗，一次能灌将近200ml, 烬酱把准备好的生理盐水放入一盆温水当中，并要求喵在床的边沿趴好，屁股翘起，对准针筒开始灌肠，“你要是敢漏出来的话，。。”，烬酱一边灌肠一边说着恐怖的话，喵用尽全力，加紧自己的后庭，每灌一次，喵都感觉后庭被打开看，灌到第二管的时候，突然一根手指进入了喵的菊花，“啊，啊，喵，啊，好热，”，喵的后庭瞬间夹紧，想把这根手指挤出去，可是这根手指又插进来了，并且不断地深入，啊，每次都让喵菊花受不了，“啊，烬酱，喵不行啦，不要啊，不要了啊”，烬酱的手指丝毫没有停的意向，还在不断的深入，就这样不断的循环，每当抽出手指，烬酱就继续灌肠，直到灌了5管，喵感觉坚持不住了为止。“啊，烬酱，喵不行啦，手指出来喵，求你啦，烬酱，喵错啦，烬酱，出来啦”，“好呀，那我出来了啊，你可要夹住了，别喷出来”，没想到烬酱这次这么容易就答应了，可能是烬酱也觉得灌肠灌的差不多了吧，想让喵去排出来吧~喵这样想着，烬酱果然就把手指慢慢抽了出来，喵已经做好了去排出来的准备，可是，就在烬酱把手指抽出来的瞬间，一个比烬酱手指还要粗还要硬的冰冷的物体被塞入了喵的菊花当中，喵瞬间感觉炸了，“啊，啊，啊，啊，啊”，菊花传来了强烈的刺激，啊，”烬酱，说好的说好的拿出来呢“，”烬酱，你放了什么东西啊，呜呜，好刺激“ ，菊花处不断传来强烈的刺激，”喵还想排出来呢“，”放个东西帮喵忍着“，烬酱说道，说着，烬酱压在了喵敏感的身体上，”喵不行了，好刺激，烬酱，这是什么啊，”，后庭的触感又粗用硬，不知道烬酱放了什么奇怪的物品，而且不断地出着水，灌肠的液体也不断着肆虐着喵的身体。“今晚就是要虐喵”，喵已经受不了了，可是烬酱还是不让喵排出来， “烬酱，喵真的不行了，喵错啦，让喵去吧”，过了不知道多久，感觉很久很久了，烬酱终于让喵去排，可是喵连走路的力气都没有啦，刚到厕所，就已经受不了，把烬酱塞得东西拔了出来，居然是一个金属的非常粗的肛塞，怪不得这么刺激。喵开始排泄，把灌肠的液体全部排了出来，大约过了半个小时，筋疲力尽的喵从厕所走了出来，直接趴到了床上。</p>

<p>“今晚喵不用睡的”，烬酱这样说着，烬酱就还有调教，呜呜，可怕啊，喵，喵已经完全没有力气了。可是还是没有完成烬酱准备的惩罚。“趴下，蒙上眼睛，”，烬酱不知道又从书包里拿出了什么奇怪的东西，&quot;作完这个调教，我们就睡觉，烬酱说道&quot;，喵又趴在了床上，想着终于到最后的调教了。终于可以给喵睡了。可是，烬酱不愧是一只攻，喵这样想果然too young，too simple.真正的调教还在后面呢。</p>

<p>喵果然还是too young，too simple，烬酱又从书包里拿出了一个奇怪的东西，然后喵的后庭又开始被调教了，由于不知道烬酱拿的什么东西，喵只好提心吊胆，期待烬酱的轻虐QmQ，喵慢慢就感觉到是一颗一颗的东西慢慢塞进了喵的后庭，虽然不知道是什么，每塞一颗喵就抽搐一下，啊，期待着珠子少一点的喵，可是珠子进去一个立马就有下一个再等着进入。啊，啊，啊，喵的菊花火辣辣的，惨叫声不断，渐渐地，一串珠子被塞入了喵的菊花深处，喵已经喘不过气了，就在这时，烬酱把灯关了。“喵酱，我们睡觉啦”，“啊，烬酱，可是喵后面的。。。还有东西”，“就睡觉”，烬酱说着，呜呜呜，这怎么睡啊，后庭传来的刺激太强烈了，喵实在是hold不住啊QMQ，可是烬酱还是坚持要喵这样睡。啊，这时，喵终于明白了，“你今晚不用睡觉的”，啊啊，竟然是真不用睡觉啊，可怕死啦。作为一只喵受，就这样被烬酱调教了一晚上。</p>

<p>“别忘了你还是我的m呢”，呜呜，喵受再也不敢嚣张了，烬酱。</p>

<p>大约在床上躺了2个小时，喵实在受不了了，就去厕所偷偷的把珠子给取了出来，可是后果非常严重，第二天，烬酱的调教是带珠子一天，出门也要，看电影也要，总之这个珠子就要带一天。呜呜，喵就后庭就被烬酱开发了24小时，QmQ。第二天，烬酱对喵进行了最恐怖的调教，给后庭喂冰块调教，超级超级恐怖，每进入一个冰块，喵都是被掏空的感觉，到最后几个冰块的时候，喵更是惨叫不断，腿软，腰疼；直到3天以后才慢慢恢复。</p>

<p>经历了这些超级恐怖的调教以后，喵终于认清了自己的错误，首先，喵必须明确烬攻喵受的地位，不能有丝毫反攻的想法，更不能嚣张，否则烬酱的调教很恐怖的；其次，喵要坐一只乖喵，就要有少女的样子，还有少女的贞操。现在喵正带着贞操环，来确保喵的少女贞操。呜呜~~，再次，喵就要认识到错误，拖欠了这么久的检查，呜呜，就要做好被惩罚的心理准备。不能忘记主奴契约的内容。</p>

<p>总之，喵以后就要明确喵受烬攻的身份，不能逆转，不能反攻，学习做受，好好开发自己，保持少女喵的贞操，让烬酱满意。弱弱的期待，烬酱下一次的调教~就想要啊喵~</p>

<p>喵困死啦，不行啦，晚安喵，烬酱。</p>



<script type="text/javascript">
var _self="undefined"!=typeof window?window:"undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?self:{},Prism=function(){var e=/\blang(?:uage)?-(\w+)\b/i,t=0,n=_self.Prism={util:{encode:function(e){return e instanceof a?new a(e.type,n.util.encode(e.content),e.alias):"Array"===n.util.type(e)?e.map(n.util.encode):e.replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/\u00a0/g," ")},type:function(e){return Object.prototype.toString.call(e).match(/\[object (\w+)\]/)[1]},objId:function(e){return e.__id||Object.defineProperty(e,"__id",{value:++t}),e.__id},clone:function(e){var t=n.util.type(e);switch(t){case"Object":var a={};for(var r in e)e.hasOwnProperty(r)&&(a[r]=n.util.clone(e[r]));return a;case"Array":return e.map&&e.map(function(e){return n.util.clone(e)})}return e}},languages:{extend:function(e,t){var a=n.util.clone(n.languages[e]);for(var r in t)a[r]=t[r];return a},insertBefore:function(e,t,a,r){r=r||n.languages;var l=r[e];if(2==arguments.length){a=arguments[1];for(var i in a)a.hasOwnProperty(i)&&(l[i]=a[i]);return l}var o={};for(var s in l)if(l.hasOwnProperty(s)){if(s==t)for(var i in a)a.hasOwnProperty(i)&&(o[i]=a[i]);o[s]=l[s]}return n.languages.DFS(n.languages,function(t,n){n===r[e]&&t!=e&&(this[t]=o)}),r[e]=o},DFS:function(e,t,a,r){r=r||{};for(var l in e)e.hasOwnProperty(l)&&(t.call(e,l,e[l],a||l),"Object"!==n.util.type(e[l])||r[n.util.objId(e[l])]?"Array"!==n.util.type(e[l])||r[n.util.objId(e[l])]||(r[n.util.objId(e[l])]=!0,n.languages.DFS(e[l],t,l,r)):(r[n.util.objId(e[l])]=!0,n.languages.DFS(e[l],t,null,r)))}},plugins:{},highlightAll:function(e,t){var a={callback:t,selector:'code[class*="language-"], [class*="language-"] code, code[class*="lang-"], [class*="lang-"] code'};n.hooks.run("before-highlightall",a);for(var r,l=a.elements||document.querySelectorAll(a.selector),i=0;r=l[i++];)n.highlightElement(r,e===!0,a.callback)},highlightElement:function(t,a,r){for(var l,i,o=t;o&&!e.test(o.className);)o=o.parentNode;o&&(l=(o.className.match(e)||[,""])[1],i=n.languages[l]),t.className=t.className.replace(e,"").replace(/\s+/g," ")+" language-"+l,o=t.parentNode,/pre/i.test(o.nodeName)&&(o.className=o.className.replace(e,"").replace(/\s+/g," ")+" language-"+l);var s=t.textContent,u={element:t,language:l,grammar:i,code:s};if(!s||!i)return n.hooks.run("complete",u),void 0;if(n.hooks.run("before-highlight",u),a&&_self.Worker){var c=new Worker(n.filename);c.onmessage=function(e){u.highlightedCode=e.data,n.hooks.run("before-insert",u),u.element.innerHTML=u.highlightedCode,r&&r.call(u.element),n.hooks.run("after-highlight",u),n.hooks.run("complete",u)},c.postMessage(JSON.stringify({language:u.language,code:u.code,immediateClose:!0}))}else u.highlightedCode=n.highlight(u.code,u.grammar,u.language),n.hooks.run("before-insert",u),u.element.innerHTML=u.highlightedCode,r&&r.call(t),n.hooks.run("after-highlight",u),n.hooks.run("complete",u)},highlight:function(e,t,r){var l=n.tokenize(e,t);return a.stringify(n.util.encode(l),r)},tokenize:function(e,t){var a=n.Token,r=[e],l=t.rest;if(l){for(var i in l)t[i]=l[i];delete t.rest}e:for(var i in t)if(t.hasOwnProperty(i)&&t[i]){var o=t[i];o="Array"===n.util.type(o)?o:[o];for(var s=0;s<o.length;++s){var u=o[s],c=u.inside,g=!!u.lookbehind,h=!!u.greedy,f=0,d=u.alias;u=u.pattern||u;for(var p=0;p<r.length;p++){var m=r[p];if(r.length>e.length)break e;if(!(m instanceof a)){u.lastIndex=0;var y=u.exec(m),v=1;if(!y&&h&&p!=r.length-1){var b=r[p+1].matchedStr||r[p+1],k=m+b;if(p<r.length-2&&(k+=r[p+2].matchedStr||r[p+2]),u.lastIndex=0,y=u.exec(k),!y)continue;var w=y.index+(g?y[1].length:0);if(w>=m.length)continue;var _=y.index+y[0].length,P=m.length+b.length;if(v=3,P>=_){if(r[p+1].greedy)continue;v=2,k=k.slice(0,P)}m=k}if(y){g&&(f=y[1].length);var w=y.index+f,y=y[0].slice(f),_=w+y.length,S=m.slice(0,w),O=m.slice(_),j=[p,v];S&&j.push(S);var A=new a(i,c?n.tokenize(y,c):y,d,y,h);j.push(A),O&&j.push(O),Array.prototype.splice.apply(r,j)}}}}}return r},hooks:{all:{},add:function(e,t){var a=n.hooks.all;a[e]=a[e]||[],a[e].push(t)},run:function(e,t){var a=n.hooks.all[e];if(a&&a.length)for(var r,l=0;r=a[l++];)r(t)}}},a=n.Token=function(e,t,n,a,r){this.type=e,this.content=t,this.alias=n,this.matchedStr=a||null,this.greedy=!!r};if(a.stringify=function(e,t,r){if("string"==typeof e)return e;if("Array"===n.util.type(e))return e.map(function(n){return a.stringify(n,t,e)}).join("");var l={type:e.type,content:a.stringify(e.content,t,r),tag:"span",classes:["token",e.type],attributes:{},language:t,parent:r};if("comment"==l.type&&(l.attributes.spellcheck="true"),e.alias){var i="Array"===n.util.type(e.alias)?e.alias:[e.alias];Array.prototype.push.apply(l.classes,i)}n.hooks.run("wrap",l);var o="";for(var s in l.attributes)o+=(o?" ":"")+s+'="'+(l.attributes[s]||"")+'"';return"<"+l.tag+' class="'+l.classes.join(" ")+'" '+o+">"+l.content+"</"+l.tag+">"},!_self.document)return _self.addEventListener?(_self.addEventListener("message",function(e){var t=JSON.parse(e.data),a=t.language,r=t.code,l=t.immediateClose;_self.postMessage(n.highlight(r,n.languages[a],a)),l&&_self.close()},!1),_self.Prism):_self.Prism;var r=document.currentScript||[].slice.call(document.getElementsByTagName("script")).pop();return r&&(n.filename=r.src,document.addEventListener&&!r.hasAttribute("data-manual")&&document.addEventListener("DOMContentLoaded",n.highlightAll)),_self.Prism}();"undefined"!=typeof module&&module.exports&&(module.exports=Prism),"undefined"!=typeof global&&(global.Prism=Prism);
</script>


</body>

</html>
