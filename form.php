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
    <input type="tel" name="field-name-1" required placeholder="Номер телефона" />
  </label><br />

  <label>
    Текстовое поле email:<br />
    <input name="field-email"
      type="email" required
      placeholder="Введите вашу почту" />
  </label><br />

  <label>
    Ваша дата рождения(дд.мм.гггг):<br />
    <input name="field-date"
      value="" required
      type="date" />
  </label><br />

  Ваш пол:<br />
  <label><input type="radio" checked="checked" required
    name="radio-group-1" value="Значение1" />
    Мужской</label>
  <label><input type="radio"
    name="radio-group-1" value="Значение2" />
    Женский</label>
    <br />    
  <label>
    Список языков (listbox с множественным выбором):
    <br />
    <select name="field-name-4[]" multiple="multiple" required>
      <option value="variant1">Pascal</option>
      <option value="variant2">С</option>
      <option value="variant3">С++</option>
      <option value="variant4">JavaScript</option>
      <option value="variant5">PHP</option>
      <option value="variant6">Python</option>
      <option value="variant7">Java</option>
      <option value="variant8">Haskel</option>
      <option value="variant9">Clojure</option>
      <option value="variant10">Prolog</option>
      <option value="variant11">Scala</option>
    </select>
  </label><br />

  <label>
    Биография:
             <br />
    <textarea name="field-name-2"></textarea>
  </label><br />

  <label>
    <input type="checkbox" name="check-1" required/>
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
