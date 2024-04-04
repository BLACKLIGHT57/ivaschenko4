<head>
    <link rel="stylesheet" href="style.css">
    <title>aleksandr_ivaschenko</title>
</head>
<body>
  
<div class="forma" id="form">
<form action="index.php" method="POST">
  <p class="aligncenter">
  <img src="star.jpg" class="imgone">
  </p>
  <label></label>
    Ваши инициалы(Фамилия имя очество):<br />
    <input name="fio" required placeholder="" />
  </label><br />

  <label>
    Номер телефона:<br />
    <input type="tel" name="phone" required placeholder="Номер телефона" />
  </label><br />

  <label>
    Текстовое поле email:<br />
    <input name="email"
      type="email" required
      placeholder="Введите вашу почту" />
  </label><br />

  <label>
    Ваша дата рождения(дд.мм.гггг):<br />
    <input name="birth_date"
      value="" required
      type="date" />
  </label><br />

  Ваш пол:<br />
  <label><input type="radio" checked="checked" required
    name="gender" value="Мужской" />
    Мужской</label>
  <label><input type="radio"
    name="gender" value="Женский" />
    Женский</label>
    <br />    
  <label>
    Список языков (listbox с множественным выбором):
    <br />
    <select name="favorite_languages[]" multiple="multiple" required>
      <option value="1">Pascal</option>
      <option value="2">С</option>
      <option value="3">С++</option>
      <option value="4">JavaScript</option>
      <option value="5">PHP</option>
      <option value="6">Python</option>
      <option value="7">Java</option>
      <option value="8">Haskel</option>
      <option value="9">Clojure</option>
      <option value="10">Prolog</option>
      <option value="11">Scala</option>
    </select>
  </label><br />

  <label>
    Биография:
             <br />
    <textarea name="biography"></textarea>
  </label><br />

  <label>
    <input type="checkbox" name="contract_accepted" required/>
    С контрактом ознакомлен
  </label><br />
 
  <input type="submit" value="Сохранить" />
</form>
</div>






<footer class="footer">
    <div class="container">
       <div class="footer-content">
          <h3>© Aleksandr Ivaschenko</h3>
          
       </div>
       <div class="footer-links">
          <ul>
            <li><a href="https://kubsu.ru/">Главная</a></li>
            <li><a href="https://vk.com/voron_57">О нас </a></li>     
            
          </ul>
       </div>
    </div>
 </footer>
</body>
