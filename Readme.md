# 1-dars

- PHP ni internetdan topib uni c:\ ni ichiga istalgan joyiga papka ochib qo'yamiz

# 2-dars

- '' -oddiy tekstlar uchun ishltiladi.
- "" - murkkab narsalar uhun ishlatiladi va joyni '' dan ko'ra koproq eggallaydi.
- `//` - orqali faqat birta qotorni kommentriyaga oladi.
- `#` - ham bir qatorni
- `/**/` - ichida istalgancha qatorlar kommentariya qilinadi.
- `.` - esa ikkita matinni bir biriga qo'shish uchun ishlatiladi.

# 3-dars

O'zgaruvchilar, ularni turlari, konstantalar va ular bilan ishlash.

- O'zgaruvchilar e'lon qilinishidan avva `$` ishlatiladi.
- O'zgaruvchilar turlari:

1. Integer
2. Float
3. Boolean
4.

- Konstantalar ikki xil bo'ladi:

1. PHP ozini ichki qurilgan konstantalari
2. Biz ochadiga konstantalar

- `defined('PI' 3.14)` ishlatilishi `echo PI`

# 4-dars

Shart operatorlari `if` `trenary opertor` `switch case`

# 5-dars

Massivlar bilan ishlash.

PHP dagi massivlar Js dagi bo'lib unga qo'shimcha ravishda `Assootsiativ massiv` ham mavjud. Undan foydalanish:

```
$arr = array("short"=>"Dictionary", "lan"=>"Language")
echo $arr["short"]
```

Uni barcha elementlarini ko'rsatish uchun:

```
foreach($arr as $key=>$value)
    echo "Kaliti: ".$key." qiymati: ".$value
```

# 6-dars

Sikllar: `for; while, do while`

# 7-dars

Proyektga dinamik fayllarni ulash.
Proyekt ichidaga hamma sahifalarda takrorlanadigan qismlar header aside footer kabi ularni hamma sahifada qayta yozmasdan alohida qilib ulashga dinamik ulashlar deyiladi. Uni 4 xil ko'rinishi mavjud:

1. required(/file_name.php) - Faylni qidiradi agar mavjud bo'lmasa sahifani ummuman ishlatmay qo'yadi xatoni ko'rsatib.
2. include(/file_name.php) - Faylni qidiradi agar u bo'lmasa xato ko'rsatib qolgan kodni ham o'qitadi.
3. required_once() - faylni faqat bir marta ko'chirib qo'yadi
4. include_once() - bu ham
