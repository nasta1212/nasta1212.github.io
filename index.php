<HTML>
<script>
window.onload = function(){
setInterval(clockPainting, 1000);}
</script>
<script src="js/clock1.js"></script>
	<HEAD>
		<meta charset="utf-8">
		<title>Сайт web-студіо "Web-DECO"</title>
	<script type="text/javascript">
	function sent()
	{
		var valid = true;
		var elems = document.forms[0].elements;
		for(var i=0; i<document.forms[0].length; i++)
		{
			if(elems[i].getAttribute('type')=='text'||
			   elems[i].getAttribute('type')=='password'||
			   elems[i].getAttribute('type')=='email')
			   {
					if(elems[i].value == '')
					{
						elems[i].style.border = '2px solid red';
						valid = false;
					}
			   }
			if(!valid)
			{
				alert('Заповніть всі поля!!!');
				return false;
			}
		}
	}
	
	 function clockPainting() {
        var now = new Date();
        var sec = now.getSeconds();
        var min = now.getMinutes();
        var hr = now.getHours();

        var ctx = document.getElementById("canvas").getContext("2d");
        ctx.save();// помещаем текущий контекст в стэк

        ctx.clearRect(0,0,150,150);
        ctx.translate(75, 75);
        ctx.scale(0.4,0.4);
        ctx.rotate(-Math.PI/2);

        ctx.strokeStyle = "black";
        ctx.fillStyle = "black";
        ctx.lineWidth = 8;
        ctx.lineCap = "round";

        ctx.save();
        ctx.beginPath();

        for (var i = 0; i < 12; i++) {
            ctx.rotate(Math.PI/6);
            ctx.moveTo(100,0);
            ctx.lineTo(120,0);
        }

        ctx.stroke();// нарисовали то, что ранее описали
        ctx.restore();// достаем последний сохраненный контекст из стэка

        ctx.save();
        // рисуем часовую стрелку, вращая холст
        ctx.rotate((Math.PI/6)*hr +
            (Math.PI/360)*min +
            (Math.PI/21600)*sec);
        ctx.lineWidth = 14;

        ctx.beginPath();
        ctx.moveTo(-20,0);

        // линия почти до часовых меток
        ctx.lineTo(80,0);
        ctx.stroke();
        ctx.restore();

        ctx.save();

        // минутная стрелка
        ctx.rotate((Math.PI/30*min) +
            (Math.PI/1800)*sec);
        ctx.lineWidth = 10;

        ctx.beginPath();
        ctx.moveTo(-28,0);
        ctx.lineTo(112,0);
        ctx.stroke();
        ctx.restore();

        ctx.save();

        // секундная стрелка
        ctx.rotate(sec * Math.PI/30);
        ctx.strokeStyle = "#D40000";// цвет контура
        ctx.fillStyle = "#D40000";
        ctx.lineWidth = 6;

        ctx.beginPath();
        ctx.moveTo(-30,0);
        ctx.lineTo(83,0);
        ctx.stroke();
        ctx.restore();

        ctx.restore();
    }
	</script>
	<style>
	.shadowtext{
		text-shadow: 1xp 3xp 2xp white, 0 0 1em red;
		color: #210042;
		font-size: 2em;
	}
	</style>
	</HEAD>
	<BODY background="images/bg.jpg">
<h1 align="center">Список зареєстрованих!</h1>
	<table border="1" align="center" cellpadding="10">

		</table>
			<td background="images/bg-3.jpg" colspan="2" height="150" align="right"><font size="5"><h1 class="shadowtext">Сайт web-студії "Web-DECO"</h1></font></td>
		</tr>
		<tr>
			<td colspan="2">
			 <font size="4"><b>
			 <a href="#">Головна</a>&nbsp;&nbsp;
			 <a href="#">Фотогалерея</a>&nbsp;&nbsp;
			 <a href="#">Телефени</a>&nbsp;&nbsp;
			 <a href="#">Статистика</a>&nbsp;&nbsp;
			 <a href="#">Зареєстровані</a>&nbsp;&nbsp;
			</b></font>
			</td>
		</tr>
		<tr>
			<td width="30%" valign="top">
<center><canvas id="canvas" height="120" width="120"></canvas></center>
<hr>
			 <font size="5" color="navy"><h2>Новини</h2></font>
				<font size="5">
			<ul>
				<li><a href="#">Сайт будівельной компанії</a></li>
				<li><a href="#">Сайт ТМ "Новашкола"</a></li>
				<li><a href="#">Редизайн сайту classno.com.ua</a></li>
				<li><a href="#">Розробка CMS для Metro Cash&Carry</a></li>
				<li><a href="#">Сайт-візитка дизайнера інтерфейсів</a></li>
				<p align="right"><a href="#">інші...</a></p>
			</ul>
			</font>
		<hr>
	<h1 align="center"><font color="green">Реєстрація</font></h1>
	<form action="forma.php" method ="post" onsubmit="return send();">
	<TABLE align="center" bgcolor="#ccc">
	<TR>
		<TD><font color="green">Прізвище</font>: </TD>
	<TD><input type="text" size="10" maxlength="20" name="name2"</TD>
	</TR>
		<TD><font color="green">Ім'я</font>: </TD>
	<TD><input type="text" size="10" maxlength="20" name="name1"</TD>
	</TR>
		<TD><font color="green">E-Mail</font>: </TD>
	<TD><input type="text" size="10" maxlength="20" name="email"</TD>
	</TR>
		<TD><font color="green">Пароль</font>: </TD>
	<TD><input type="text" size="10" maxlength="20" name="password"</TD>
	</TR>
	</TABLE>
	
	<p align="center">
	<input type="submit" value="Заруєструватись">
	<input type="reset" value="Очистити">
	</p>
		</form>
		</hr>
			</td>
			<td width="70%">
<p>Зробити сайт з нами легко</p>
<p> Створення власного сайту - це не тільки прерогатива великого бізнесу. Інтернет відкриває широкі можливості в першу чергу для малого бізнесу, для приватної підприємницької ініціативи. Адже, при започаткуванні власної справи розробка сайту потребує зовсім невеликих інвестицій, у порівнянні з іншими видами витрат. Створити сайт, в більшості випадків - це значно дешевше, наприклад, ніж оренда офісу, чи витрати на зарплату працівників.</p>
<p> Якщо Вам потрібно якісно створити сайт, який максимально буде відповідати своєму призначенню, то Ви завітали за вірною адресою!</p>
<p>Наша вебстудія допоможе, якщо Вам потрібно:</p>
<p>
<ul>

    <li>зробити сайт якісно</li>
    <li>зробити сайт недорого</li>
    <li>зробити сайт швидко</li>
    <li>зробити сайт ефективно</li>
	
</ul>
</p>
<p>Ми будемо раді стати Вам у нагоді і створити веб-сайт, якісний і привабливий для відвідувача. Вебстудія Web-DECO надає цілий комплекс послуг з проектування сайтів, дизайну сайтів і розробки сайтів.</p>

<p>Створити сайт у Києві? Створити сайт в іншому місті?</p>

<p>Так, цілком можливо. Територіально наша вебстудія знаходиться в Київській області, тому найчастіше ми займаємось розробкою сайтів для замовників із Києва. Але кількість користувачів Інтернет постійно росте і в інших містах - у Дніпропетровську, Львові, Харкові, Донецьку, Запоріжжі, Кіровограді, Черкасах, та в більшості інших куточків України. Відповідно, зростає і попит на веб-сайти. Тому ми будемо раді створити сайт і для клієнтів з будь-яких інших міст. В такому разі вебстудія виконує всі роботи зі створення сайту віддалено.</p>

<p>Створення сайту є однією з наших пропозицій у галузі веб-розробки. Коротко про всі пропозиції:</p>

<p>Дизайн сайту від веб-студії Web-DECO</p>

<p><img src="images/penzli.jpg" height="140" width="140" align="left" hspace="15" vspace="">При створенні сайту його зовнішній вигляд, з нашої точки зору, має бути гармонійним і збалансованим. Дизайн сайту повинен мати певну оригінальність, щоб він легко запам'ятовувався. З другого боку, на сайті мають бути присутні зручність візуального сприйняття і інтуітивна зрозумілість інтерфейсів. Саме тому ми пропонуємо виключно індивідуальний підхід до створення дизайну сайту. При проектуванні кольорових рішень, візуальних елементів сайту ми обов'язково врахуємо специфіку діяльності клієнта і його особисті побажання.</p>

<p>Розробка сайту в нашій веб-студії</p>

<p><img src="images/html.jpg" height="140" width="140" align="left" hspace="15" vspace="">Основа для ефективного виконання сайтом покладених на нього задач, як правило, закладається ще в період розробки сайту. Ми ретельно ставимось до питань швидкодії і економії ресурсів при роботі сайту. В той же час, важливе значення мають його надійність, зручність керування сайтом, можливість оновлення і нарощення функціональності сайту. Тому ми розробили власну систему керування контентом сайту (CMS), яка дозволяє зробити процес управління створеним сайтом максимально зручним і приємним.</p>

<p>При розробці cайтів фахівці вебстудії Web-DECO використовують найбільш прогресивні технології веб-розробки.</p>

<p>Підтримка сайту, пошукове просування сайту, пошукова оптимізація сайту від веб-студії Web-DECO</p>

<p><img src="images/graphic.jpg" height="140" width="140" align="left" hspace="15" vspace="">Важливим напрямком діяльності нашої вебстудії є також технічна і інформаційна підтримка сайтів. Адже мало просто зробити сайт. Щоб зацікавити відвідувача, створений сайт має підтримувати свій контент у свіжому і актуальному стані, а також в разі потреби оновлювати свої сервіси і функціональний зміст. Крім того, не слід забувати і про пошукову оптимізацію сайту (SEO), завдяки якій сайт отримує гарне взаєморозуміння із провідними пошуковими системами. Відвідувачі, які прийшли на сайт з пошукових машин, є для сайту найціннішими. Вони вже сформулювали свої інтереси і намагаються знайти інформацію на потрібну для них тему. Саме тому дуже важливо направити на сайт відвідувачів з пошукових систем, які задають цільові фрази, що стосуються Вашого бізнесу. Тож задача пошукової оптимізації - просування сайту в верхні рядки результатів пошукових систем за ключовими словами, які шукає користувач. Це дає гарну можливість привернути увагу до сайту з боку великої кількості зацікавлених відвідувачів.</p>

<p>Звертайтесь до веб-студії Web-DECO, і ми з радістю застосуємо свої здібності і досвід для вирішення Ваших задач! Ми можемо створити сайт, який стане для Вас вдалою інвестицією.</p>

			</td>
		</tr>	
		<tr>
			<td background="images/bg-3.jpg" colspan="2" valign="middle" height="90">
			<font size="4">Сайт розробила "Лисенко Анастасія"</font>
			</td>
		</tr>
	 </table>
	
	</BODY>
</HTML>