INSERT INTO Race (nameRace) VALUES 
    ('Labrador'), ('Chihuahua'), ('Berger Allemand'), ('Pit Bull'), ('Teckel'), ('Boxer'), ('Basenji'), ('Bichpoo'), ('Super Rare'), ('Doxle');

INSERT INTO userDog (email, pwd, lastConnectionDate, lastName, firstName, country, city) VALUES 
    ('sabine@realise.ch', '$2y$10$RZvlSXN4j9ufEUA9/mh45Od7dQ0nOPZM3SI2fewLc6vHBlpYEZdKa', '2019-01-01 12:12:12', 'Sabine', 'Palazzotto', 'Suisse', 'Genève'),
    ('ange@realise.ch', '$2y$10$RZvlSXN4j9ufEUA9/mh45Od7dQ0nOPZM3SI2fewLc6vHBlpYEZdKa', '2019-01-01 12:12:12', 'Ange', 'Gnamba', 'Suisse', 'Genève'),
    ('cyril@realise.ch', '$2y$10$RZvlSXN4j9ufEUA9/mh45Od7dQ0nOPZM3SI2fewLc6vHBlpYEZdKa', '2019-01-01 12:12:12', 'Cyril', 'Tekpo', 'Suisse', 'Genève'),
    ('odile@realise.ch', '$2y$10$RZvlSXN4j9ufEUA9/mh45Od7dQ0nOPZM3SI2fewLc6vHBlpYEZdKa', '2019-01-01 12:12:12', 'Odile', 'Bouo', 'Suisse', 'Bern'),
    ('eulalia@realise.ch', '$2y$10$RZvlSXN4j9ufEUA9/mh45Od7dQ0nOPZM3SI2fewLc6vHBlpYEZdKa', '2019-01-01 12:12:12', 'Eulalia', 'Bottelho', 'Suisse', 'Bern'),
    ('marine@realise.ch', '$2y$10$RZvlSXN4j9ufEUA9/mh45Od7dQ0nOPZM3SI2fewLc6vHBlpYEZdKa', '2019-01-01 12:12:32', 'Marine', 'Cerdelli', 'Suisse', 'Genève'),
    ('melodie@realise.ch', '$2y$10$RZvlSXN4j9ufEUA9/mh45Od7dQ0nOPZM3SI2fewLc6vHBlpYEZdKa', '2019-01-01 12:12:12', 'Melodie', 'Kenkalite', 'Suisse', 'Vaud'),
    ('mohamad@realise.ch', '$2y$10$RZvlSXN4j9ufEUA9/mh45Od7dQ0nOPZM3SI2fewLc6vHBlpYEZdKa', '2019-01-01 12:12:12', 'Mohamad', 'Mabarak', 'Suisse', 'Valais'),
    ('paolo@realise.ch', '$2y$10$RZvlSXN4j9ufEUA9/mh45Od7dQ0nOPZM3SI2fewLc6vHBlpYEZdKa', '2019-01-01 12:12:12', 'Paolo', 'Palazzotto', 'Suisse', 'Vaud'),
    ('pauline@realise.ch', '$2y$10$RZvlSXN4j9ufEUA9/mh45Od7dQ0nOPZM3SI2fewLc6vHBlpYEZdKa', '2019-01-01 12:12:12', 'Pauline', 'Dubois', 'Suisse', 'Valais'),
    ('rodney@realise.ch', '$2y$10$RZvlSXN4j9ufEUA9/mh45Od7dQ0nOPZM3SI2fewLc6vHBlpYEZdKa', '2019-01-01 12:12:12', 'Rodney', 'Massima', 'Suisse', 'Fribourg'),
    ('walid@realise.ch', '$2y$10$RZvlSXN4j9ufEUA9/mh45Od7dQ0nOPZM3SI2fewLc6vHBlpYEZdKa', '2019-01-01 12:12:12', 'Walid', 'Affin', 'Suisse', 'Zurich')
;

INSERT INTO Dog (nickName, birthday, picture, userId) VALUES 
    ('anjuide', '2018-01-12', 'anjuide.jpg', '2'),
    ('didi', '2018-02-11', 'didi.jpg', '4'),
    ('lulu', '2018-03-10', 'lulu.jpg', '5'),
    ('mareine', '2018-04-09', 'mareine.jpg', '6'),
    ('abio', '2018-05-08', 'abio.jpg', '1'),
    ('paupau', '2018-06-07', 'paupau.jpg', '10'),
    ('pao', '2018-07-06', 'pao.jpg', '9'),
    ('angel', '2018-08-05', 'angel.jpg', '2'),
    ('abibi', '2018-09-04', 'abibi.jpg', '1'),
    ('wale', '2018-10-03', 'wale.jpg', '12'),
    ('dixie', '2018-11-02', 'dixie.jpg', '4'),
    ('manou', '2018-12-01', 'manou.jpg', '6'),
    ('cycy', '2018-12-01', 'cycy.jpg', '3'),
    ('paopao', '2018-11-02', 'paopao.jpg', '9'),
    ('mel', '2018-10-03', 'mel.jpg', '7'),
    ('rod', '2018-09-04', 'rod.jpg', '11'),
    ('marou', '2018-08-05', 'marou.jpg', '6'),
    ('momo', '2018-07-06', 'momo.jpg', '8'),
    ('ajax', '2018-06-07', 'ajax.jpg', '2'),
    ('mimi', '2018-05-08', 'mimi.jpg', '8'),
    ('moimoi', '2018-04-09', 'moimoi.jpg', '8'),
    ('cyhy', '2018-03-10', 'cyhy.jpg', '3')
;

INSERT INTO DogRace (dogId, raceId) VALUES 
    ('1', '1'),
    ('2', '2'),
    ('3', '2'),
    ('4', '2'),
    ('5', '3'),
    ('6', '3'),
    ('7', '3'),
    ('8', '4'),
    ('9', '4'),
    ('10', '4'),
    ('11', '4'),
    ('12', '5'),
    ('13', '6'),
    ('14', '6'),
    ('15', '7'),
    ('16', '7'),
    ('17', '7'),
    ('18', '8'),
    ('19', '8'),
    ('20', '9'),
    ('21', '10'),
    ('22', '10')
;
INSERT INTO Article (title, picture, description, publicationDate, dogId) VALUES 
    ('Abio et les plantes', 'abio_article1.jpg', '', '2019-01-01 09:05:00', '5'),
    ('Abio fait sa belle', 'abio_article2.jpg', '#portrait', '2019-02-11 05:05:05', '5'),
    ('Abio en train de jouer', 'abio_article3.jpg', '#neige', '2019-01-03 13:25:10', '5'),
    ('Abio debout', 'abio_article4.jpg', '#sunnyday #neige', '2019-01-01 15:25:20', '5'),
    ('Portrait de Abio', 'abio_article5.jpg', '#portrait #neige', '2019-01-02 09:15:10', '5'),
    ('Croquette de soleil', 'abio_article6.jpg', '#sunnyday #neige', '2019-01-05 11:15:00', '5'),

    ('Box surprise', 'anjuide_article1.jpg', 'Qui a dit qu''il ne pouvait pas déballer une boite. ', '2019-02-03 07:10:00', '1'),
    ('A la maison', 'anjuide_article2.jpg', '#oreillesdetendues oreilledetendue', '2019-02-15 09:06:00', '1'),
    ('Mac dog', 'anjuide_article3.jpg', 'Laisse le PC et caresse moi. #dogpc', '2019-02-13 14:00:00', '1'),
    ('Watch dog', 'anjuide_article4.jpg', '', '2019-02-15 16:00:00', '1'),

    ('Eh Merci!', 'angel_article1.jpg', '#sunny day ', '2019-01-21 15:10:15', '8'),
    ('Un peu de fraicheur', 'angel_article2.jpg', 'Quand il fait trop chaud à la maison. ', '2019-01-07 11:05:20', '8'),
    ('Faux jumeau!', 'angel_article3.jpg', 'Attrapé en train de se contempler', '2019-02-15 13:10:15', '8'),
    ('A la plage', 'angel_article4.jpg', '#plage', '2019-02-09 19:05:20', '8'),

    ('Beau supporter', 'ajax_article1.jpg', 'Soirée sport avec la diva', '2019-02-15 13:10:15', '19'),
    ('Santé', 'ajax_article2.jpg', 'Après la victoire de notre équipe... Tchin ', '2019-02-15 19:05:20', '19'),

    ('Pensif?', 'cycy_article1.jpg', '#oreillesdetendues #oreilledetendue', '2019-02-15 13:10:15', '13'),
    ('Petite soif', 'cycy_article2.jpg', '', '2019-02-09 19:05:20', '13'),

    ('Portrait', 'didi_article1.jpg', '#portrait', '2019-01-21 15:10:15', '2'),
    ('Endormi', 'didi_article2.jpg', 'Quand tu lui grattes le ventre', '2019-01-07 11:05:20', '2'),
    ('Développeur chien', 'didi_article3.jpg', '#dogpc', '2019-02-15 13:10:15', '2'),
    ('Sunny day', 'didi_article4.jpg', 'Endroit ensoleillé. #sunnyday', '2019-02-09 19:05:20', '2'),

    ('Portrait', 'lulu_article1.jpg', '#portrait', '2019-01-01 09:05:00', '3'),
    ('No respect?', 'lulu_article2.jpg', 'Pas de rescpect dans ce regard', '2019-02-11 05:05:05', '3'),
    ('Petit encas', 'lulu_article3.jpg', '', '2019-01-03 13:25:10', '3'),
    ('Cache-cache', 'lulu_article5.jpg', 'Quand tu cherches ton chien...', '2019-01-02 09:15:10', '3'),
    ('Love dog', 'lulu_article6.jpg', 'Dog-Valentin', '2019-01-05 11:15:00', '3'),

    ('Au pied', 'manou_article1.jpg', 'Très contente de me retrouver!', '2019-01-21 15:10:15', '12'),
    ('Portrait', 'manou_article2.jpg', 'Ma belle! #portrait', '2019-01-07 11:05:20', '12'),
    ('Portrait', 'manou_article3.jpg', '#portrait', '2019-02-15 13:10:15', '12'),

    ('Guetteur', 'marou_article1.jpg', 'En train d''attendre l''arrivée du facteur', '2019-01-21 15:10:15', '17'),
    ('Marou', 'marou_article2.jpg', '', '2019-01-07 11:05:20', '17'),
    ('Sourire forcé?', 'marou_article3.jpg', '#smile', '2019-02-15 13:10:15', '17'),
    ('La neige est de leau', 'marou_article4.jpg', 'Petite faim ou soif? #neige', '2019-02-09 19:05:20', '17'),

    ('Portrait', 'mel_article1.jpg', '#portrait #oreilletendue #oreillestendues', '2019-01-21 15:10:15', '15'),

    ('Jeu favori!', 'momo_article1.jpg', '#jeu #twins', '2019-01-21 15:10:15', '18'),

    ('Black Dog', 'mimi_article1.jpg', '', '2019-01-21 15:10:15', '20'),
    ('Portrait', 'mimi_article2.jpg', '#portrait', '2019-01-07 11:05:20', '20'),
    ('Mimi', 'mimi_article3.jpg', 'Petit linge de fraicheur', '2019-02-15 13:10:15', '20'),

    ('Petite sortie', 'moimoi_article1.jpg', 'Très contente de sortir', '2019-01-21 15:10:15', '21'),
    ('Inconvénient', 'moimoi_article2.jpg', 'Comment monter sur ce canapé?', '2019-01-07 11:05:20', '21'),
    ('Mission réussie', 'moimoi_article3.jpg', '', '2019-01-07 11:30:20', '21'),

    ('Pao', 'pao_article1.jpg', '#portrait #oreilledetendue', '2019-01-21 15:10:15', '7'),

    ('Portrait', 'paopao_article1.jpg', 'Quand tu lui dis de mettre la ceinture', '2019-01-21 15:10:15', '14'),
    ('Trio', 'paopao_article2.jpg', 'Petite pause sur le canapé!', '2019-01-07 11:05:20', '14'),
    ('Halloween', 'paopao_article3.jpg', 'Pas content d''être déguisé #halloween', '2019-02-15 13:10:15', '14'),

    ('Basenji', 'rod_article1.jpg', '#oreilletendue', '2019-01-21 15:10:15', '16'),
    ('Halloween', 'rod_article2.jpg', 'Déguisement halloween #halloween', '2019-01-07 11:05:20', '16'),
    ('Portrait', 'rod_article3.jpg', '#portrait #oreilletendue', '2019-02-15 13:10:15', '16'),
    ('Calin', 'rod_article4.jpg', 'Envie de se faire caliner', '2019-02-09 19:05:20', '16'),

    ('Portrait', 'wale_article1.jpg', '#portrait #oreilledetendue', '2019-01-21 15:10:15', '10')
;

INSERT INTO Comment (comment, publicationDate, articleId, userId) VALUES 
    ('Bravo', '2019-02-10 10:10:24', '4', '2'),
    ('Très joli!', '2019-02-10 10:15:24', '4', '8'),
    ('Joli!', '2019-02-10 12:10:24', '3', '8'),
    ('Magic dog','2019-02-10 12:12:24', '4', '2'),
    ('Bonne journéee!!!', '2019-02-10 13:13:24', '5', '2'),
    ('Bonne journéee à vous aussi!', '2019-02-10 13:15:24', '5', '8'),
    ('Bonne journée à tous et à vos toutous', '2019-02-10 14:10:24', '7', '2'),
    ('Très beau chien', '2019-02-10 14:14:24', '8', '8'),
    ('Merci beaucoup', '2019-02-10 15:15:24', '8', '2'),
    ('Anjuiiiide!', '2019-02-11 08:05:05', '10', '8'),
    ('Très beau', '2019-02-11 08:15:05', '15', '5'),
    ('J''admire', '2019-02-11 12:12:12', '15', '3'),
    ('Est-il sage?', '2019-02-11 14:14:14', '20', '7'),
    ('ou fait-il fait semblant', '2019-02-11 14:15:15', '20', '7'),
    ('Ahaahahahha', '2019-02-11 16:16:05', '20', '12')
;