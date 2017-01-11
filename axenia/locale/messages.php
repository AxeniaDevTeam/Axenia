<?php

return array(
    "bot.name" =>
        array(
            "en" => "Axenia",
            "ru" => "Аксинья",
            "ruUN" => "Аксинья"
        ),
    "bot.pong" =>
        array(
            "en" => "Pong",
            "ru" => "Понг",
            "ruUN" => "Понг"
        ),
    "bot.error" =>
        array(
            "en" => "Ops! Something broken..",
            "ru" => "Опа, кажись что-то сломалось..",
            "ruUN" => "Оп, сломалось чот.."
        ),
    "chat.greetings" =>
        array(
            "en" => "Hello! My name is Axenia and I can count the karma points.\r\nUse \"/help\" to see more about.",
            "ru" => "Приветствую. Меня зовут Аксения. Я умею считать карму.\r\nИспользуй \"/help\" для подробностей.",
            "ruUN" => "Приветствую. Меня зовут Аксения. И я считаю карму.\r\nИспользуй \"/help\" для подробностей."
        ),
    "chat.help" =>
        array(
            "en" => "Type 'plus' (+ or 👍) for raising or 'minus' (- or 👎) for reducing karma points to the user on which message it will be replying.
Also I support the message format like \"+/👍/-👎 @username\".
Use \"/top\" to see top statistics in group.
Use \"/mystats\" to see your global statistics.
Use \"/lang\" to change the language.
Use \"/settings\" to toggle silent-mode which mute bot messages and cooldown beetween user's messages about decrease or increase karma points (admin only)
Also you may buy some pictures (kitty, gif etc) on your karma points, use \"/buy\".
Statistic is available on axeniabot.ru.",
            "ru" => "Поставьте '+' (или 👍) в ответ на сообщение для поднятия кармы или '-'(или 👎) для её опускания.
Также понимаю сообщение формата \"+/👍/-👎  @username\".
Команда \"/top\" покажет топ держателей кармы в этом группе.
Команада \"/mystats\" покажет твои глобальные статы кармы.
Используй \"/lang\" для смены языка. Доступна только администраторам группы.
Команда \"/settings\"  настройки бота: переключает тихий режим и меняет таймер между командами пользователя.
Карму можно потратить на покупки забавных картинок, используйте \"/buy\"
Статистику можно посмотреть на сайте axeniabot.ru. Канал поддержки: @AxeniaChannel.
",
            "ruUN" => "Поставьте '+' (или 👍) в ответ на сообщение для поднятия кармы или '-'(или 👎) для её опускания.
Также понимаю сообщение формата \"+/👍/-👎  @username\".
По команде \"/top\" покажу топ кармописек в этом группе.
По команде \"/mystats\" покажу твои глобальные статы кармы.
Можно сменить язык по команде \"/lang\", но она доступна только админам группы.
Команда \"/silent_mode\" настройки бота: переключает тихий режим и меняет таймер между командами пользователя
Карму можно потратить на покупки забавных картинок и не только забавных, используйте \"/buy\"
Статистику можно посмотреть на сайте axeniabot.ru. Канал поддержки: @AxeniaChannel."
        ),
    "chat.lang.start" =>
        array(
            "en" => "Please, choose your language:",
            "ru" => "Пожалуйста, выбери язык:",
            "ruUN" => "В группах смена языка только для администраторов.\r\nВыбери язык на котором ты общаешься:"
        ),
    "chat.lang.end" =>
        array(
            "en" => "Ok, I'll speak in English!",
            "ru" => "Проверка языка: борщ, балалайка. Теперь я могу говорить по-русски!",
            "ruUN" => "Проверка языка: борщ, балалайка. Теперь я могу говорить по-русски, блеать!"
        ),
    "chat.lang.foradmins" =>
        array(
            "en" => "This command is for admins only.\r\n",
            "ru" => "Смена языка доступна только админам группы.\r\n",
            "ruUN" => "Сменить язык бота может только админ.\r\n"
        ),
    "user.pickChat" =>
        array(
            "en" => "So, you need <a href='t.me/:botName?startgroup=0'>to choose а group</a> where I'll handle the karma points. ✌😊",
            "ru" => "Итак, надо <a href='t.me/:botName?startgroup=0'>выбрать группу</a>, где я буду считать карму. ✌😊",
            "ruUN" => "Итак, надо <a href='t.me/:botName?startgroup=0'>выбрать группу</a>, где я буду считать карму. ✌😊"
        ),
    "user.stat" =>
        array(
            "en" => ":user's statistic",
            "ru" => "Статистика пользователя :user",
            "ruUN" => "Статистика пользователя :user"
        ),
    "user.stat.inchat" =>
        array(
            "en" => "Karma's rate in this group: ",
            "ru" => "Карма в группе: ",
            "ruUN" => "Карма в группе: "
        ),
    "user.stat.sum" =>
        array(
            "en" => "Global karma's rate: ",
            "ru" => "Всего кармы: ",
            "ruUN" => "Наебашил кармы: "
        ),
    "user.stat.place" =>
        array(
            "en" => "Rating: ",
            "ru" => "Место в рейтинге: ",
            "ruUN" => "Место в рейтинге: "
        ),
    "user.stat.membership" =>
        array(
            "en" => "Membership: ",
            "ru" => "Состоит в группах: ",
            "ruUN" => "Заседает в группах: "
        ),
    "user.stat.rewards" =>
        array(
            "en" => "Rewards: ",
            "ru" => "Награды: ",
            "ruUN" => "Медальки: "
        ),
    "karma.top.title" =>
        array(
            "en" => "<b>Top list of Karma owners in the «:chatName»:</b>\r\n",
            "ru" => "<b>Самые почётные люди групы «:chatName»:</b>\r\n",
            "ruUN" => "<b>Самые длинные кармописюны группы «:chatName»:</b>\r\n"
        ),
    "karma.top.row" =>
        array(
            "en" => ":username (:karma)\r\n",
            "ru" => ":username (:karma)\r\n",
            "ruUN" => ":username (:karma см)\r\n"
        ),
    "karma.top.footer" =>
        array(
            "en" => "<a href=':pathToSite?group_id=:chatId'>Read more</a>",
            "ru" => "<a href=':pathToSite?group_id=:chatId'>Подробнее</a>",
            "ruUN" => "<a href=':pathToSite?group_id=:chatId'>Подробнее</a>"
        ),
    "karma.top.private" =>
        array(
            "en" => "Karma's top is available only in groups",
            "ru" => "Топ кармы доступен только в групповых чатах.",
            "ruUN" => '😐' . " Ты это действительно? \r\nТоп кармы доступен только в групповых чатах. В приватных чатах в топе только я 😊"
        ),
    "karma.plus" =>
        array(
            "en" => "<b>:from (:k1)</b> gave some karma points to <b>:to (:k2)</b>",
            "ru" => "<b>:from (:k1)</b> плюсанул в карму <b>:to (:k2)</b>",
            "ruUN" => "<b>:from (:k1)</b> подкинул в карму <b>:to (:k2)</b>"
        ),
    "karma.minus" =>
        array(
            "en" => "<b>:from (:k1)</b> took some karma points from <b>:to (:k2)</b>",
            "ru" => "<b>:from (:k1)</b> минусанул в карму <b>:to (:k2)</b>",
            "ruUN" => "<b>:from (:k1)</b> насрал в карму <b>:to (:k2)</b>"
        ),
    "karma.yourself" =>
        array(
            "en" => "Do not do it again, please!",
            "ru" => "Больше так не делай",
            "ruUN" => "Давай <b>без</b> кармадрочерства"
        ),
    "karma.tooSmallKarma" =>
        array(
            "en" => "You <b>cannot</b> vote with negative count of karma points",
            "ru" => "Ты <b>не можешь</b> голосовать с отрицательной кармой",
            "ruUN" => "Ты <b>не можешь</b> голосовать с отрицательной кармой"
        ),
    "karma.tooFast" =>
        array(
            "en" => "Not so fast. Group has a limit for user's messages.",
            "ru" => "Не так быстро. В группе установлено ограничение.",
            "ruUN" => "Эй, скорострел, <b>помедленее</b>. В группе установлено ограничение."
        ),
    "karma.unknownUser" =>
        array(
            "en" => "I don't know this user ¯\\_(ツ)_/¯ (please, try to write '👍' via Reply)",
            "ru" => "Знать его не знаю ¯\\_(ツ)_/¯ (попробуй написать Reply)",
            "ruUN" => "Такого не знаю ¯\\_(ツ)_/¯ (попробуй написать Reply)"
        ),
    "karma.manualSet" =>
        array(
            "en" => "User ':0' (id=:1) in group with id=:2 got new karma points :3",
            "ru" => "У пользователя :0 (id=:1) в группе c id=:2 карма равна :3",
            "ruUN" => "У пользователя :0 (id=:1) в группе c id=:2 карма равна :3"
        ),
    "reward.list" =>
        array(
            "en" => "Rewards list of <b>:user</b>:\r\n:list\r\n",
            "ru" => "Список наград <b>:user</b>:\r\n:list\r\n",
            "ruUN" => "Список наград <b>:user</b>:\r\n:list\r\n"
        ),
    "reward.listInGroup" =>
        array(
            "en" => "Rewards list of <b>:user</b> in group «:chatName»:\r\n:list\r\n",
            "ru" => "Список наград <b>:user</b> в группе «:chatName»:\r\n:list\r\n",
            "ruUN" => "Список наград <b>:user</b> в группе «:chatName»:\r\n:list\r\n"
        ),
    "reward.noRewards" =>
        array(
            "en" => "You don't have rewards yet.",
            "ru" => "Ни одной награды вы еще не получили.",
            "ruUN" => "Ты еще не заслужил ни одной награды."
        ),
    "reward.new" =>
        array(
            "en" => '👏' . " User named <b>:user</b> has been awarded the achievement called «<a href=':path?user_id=:user_id'>:title</a>»",
            "ru" => '👏' . " Товарищ <b>:user</b> награждается отличительным знаком «<a href=':path?user_id=:user_id'>:title</a>»",
            "ruUN" => '👏' . " Товарищ <b>:user</b> заполучил ачивку «<a href=':path?user_id=:user_id'>:title</a>»"
        ),
    "reward.type.karma.desc" =>
        array(
            "en" => "The karma points in the group :0 exceeded :1",
            "ru" => "Карма в группе :0 превысило отметку в :1",
            "ruUN" => "Карма в группе :0 превысило отметку в :1"
        ),
    "reward.type.karma1" =>
        array(
            "en" => "Karmachanic",
            "ru" => "Кармодрочер",
            "ruUN" => "Кармодрочер"
        ),
    "reward.type.karma2" =>
        array(
            "en" => "Karmaniac",
            "ru" => "Карманьяк",
            "ruUN" => "Карманьяк"
        ),
    "reward.type.karma3" =>
        array(
            "en" => "Karmonster",
            "ru" => "Кармонстр",
            "ruUN" => "Кармонстр"
        ),
    "possessive" =>
        array(
            "en" => "'s",
            "ru" => "",
            "ruUN" => ""
        ),
    "store.title" =>
        array(
            "en" => "<b>:user(:k)</b>, what do you want to buy on your karma points?",
            "ru" => "<b>:user(:k)</b>, на что желаете потратить карму?",
            "ruUN" => "<b>:user(:k)</b>, на что ты хочешь посмотреть?"
        ),
    "store.button.buy_tits" =>
        array(
            "en" => "*CENSORED*",
            "ru" => "*ЦЕНЗУРА*",
            "ruUN" => "Сиськи 30"
        ),
    "store.button.buy_butts" =>
        array(
            "en" => "*CENSORED*",
            "ru" => "*ЦЕНЗУРА*",
            "ruUN" => "Булки 20"
        ),
    "store.button.buy_cats" =>
        array(
            "en" => "Kitty 10",
            "ru" => "Котики 10",
            "ruUN" => "Котэ 10"
        ),
    "store.button.buy_jokes" =>
        array(
            "en" => "Jokes 10",
            "ru" => "Шутки 10",
            "ruUN" => "Лулзы 10"
        ),
    "store.button.buy_gif" =>
        array(
            "en" => "GIFs 10",
            "ru" => "Гифка 10",
            "ruUN" => "Гифка 10"
        ),
    "store.event.buy_tits" =>
        array(
            "en" => "*CENSORED*",
            "ru" => "*ЦЕНЗУРА*",
            "ruUN" => "<b>:user(:k)</b> купил сиськи"
        ),
    "store.event.buy_butts" =>
        array(
            "en" => "*CENSORED*",
            "ru" => "*ЦЕНЗУРА*",
            "ruUN" => "<b>:user(:k)</b> купил булки"
        ),
    "store.event.buy_cats" =>
        array(
            "en" => "<b>:user(:k)</b> have bought kitty",
            "ru" => "<b>:user(:k)</b> купил котиков",
            "ruUN" => "<b>:user(:k)</b> купил котэ"
        ),
    "store.event.buy_jokes" =>
        array(
            "en" => "<b>:user(:k)</b> have bought jokes",
            "ru" => "<b>:user(:k)</b> купил шутки",
            "ruUN" => "<b>:user(:k)</b> купил лулзы"
        ),
    "store.event.buy_gif" =>
        array(
            "en" => "<b>:user(:k)</b> have bought a GIF",
            "ru" => "<b>:user(:k)</b> купил gif-анимацию",
            "ruUN" => "<b>:user(:k)</b> купил гифку"
        ),
    "store.callback" =>
        array(
            "en" => "You bought ':buy'. You have :k karma points.",
            "ru" => "Куплено ':buy'. Осталось кармы: :k.",
            "ruUN" => "Куплено ':buy'. Осталось кармы: :k."
        ),
    "store.event.cant_buy" =>
        array(
            "en" => "<b>:user(:k)</b> has enough karma points to buy <i>':buy'</i>",
            "ru" => "<b>:user(:k)</b> имеет недостаточно кармы для <i>':buy'</i>",
            "ruUN" => "<b>:user(:k)</b>, у тебя слишком мало кармы для <i>':buy'</i>"
        ),
    "store.callback.cant_buy" =>
        array(
            "en" => "You have not enough karma points to buy ':buy'",
            "ru" => "У вас недостаточно кармы для ':buy'",
            "ruUN" => "У тебя слишком мало кармы для ':buy'"
        ),
    "store.wrongPick" =>
        array(
            "en" => "You can't pick this. This is for user ':user'",
            "ru" => "Это предназначено для :user",
            "ruUN" => "Это не для тебя. :user должен сделать выбор."
        ),
    "settings.title" =>
        array(
            "en" => "<b>Settings for admins only.</b>",
            "ru" => "<b>Настройки</b> \r\nДоступ только для администраторов группы",
            "ruUN" => "<b>Настройки</b> \r\nДоступ только для администраторов группы"
        ),
    "settings.title.cooldown" =>
        array(
            "en" => "Cooldown: <b>:cooldown min.</b>",
            "ru" => "Таймер голосования: <b>:cooldown мин.</b>",
            "ruUN" => "Таймер голосования: <b>:cooldown мин.</b>"
        ),
    "settings.title.silent_mode_on" =>
        array(
            "en" => "Silent-mode <b>activate</b>",
            "ru" => "Тихий режим <b>включен</b>",
            "ruUN" => "<b>Врублен</b> тихий режим"
        ),
    "settings.title.silent_mode_off" =>
        array(
            "en" => "Silent-mode <b>deactivate</b>",
            "ru" => "Тихий режим <b>выключен</b>",
            "ruUN" => "<b>Вырублен</b> тихий режим"
        ),
    "settings.button.silent_mode_on" =>
        array(
            "en" => " 🔔Silent mode on",
            "ru" => " 🔔Включить тихий режим",
            "ruUN" => " 🔔Врубить тихий режим"
        ),
    "settings.button.silent_mode_off" =>
        array(
            "en" => " 🔕Silent mode off",
            "ru" => " 🔕Выключить тихий режим",
            "ruUN" => " 🔕Вырубить тихий режим"
        ),
    "settings.button.set_cooldown" =>
        array(
            "en" => "⏱Set cooldown",
            "ru" => "⏱Таймер голосования",
            "ruUN" => "⏱Таймер голосования"
        ),
    "settings.switchoff" =>
        array(
            "en" => "Switch Off",
            "ru" => "Отключить",
            "ruUN" => "Отрубить"
        ),
    "settings.minute" =>
        array(
            "en" => " min.",
            "ru" => " мин.",
            "ruUN" => " мин."
        ),
    "settings.choose.cooldown" =>
        array(
            "en" => "<b>Cooldown settings</b>\r\nChoose cooldown between user's votes ",
            "ru" => "<b>Настройка таймера</b>\r\nТаймер задает период времени в течении которого пользователь не сможет поднять/повысить карму. Отсчет таймера начинается после последнего успешного поднятия/опускания кармы.\r\nВыберите значение таймера:",
            "ruUN" => "<b>Настройка таймера</b>\r\nТаймер задает период времени в течении которого пользователь не сможет поднять/повысить карму. Отсчет таймера начинается после последнего успешного плюсования/засирания кармы.\r\nВыберите значение таймера:"
        )
);
