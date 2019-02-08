INSERT INTO Race (nameRace) VALUES 
    ('Rodweiller'), ('Boodle'), ('Bichpoo'), ('Bichpoo'), ('Show Show'), ('Super Rar'), ('Doxle');

INSERT INTO userDog (email, pwd, lastConnectionDate, lastName, firstName, country, city) VALUES 
    ('ange.gnamba@gmail.com', 'word', '2019-01-08 05:21:24', 'Ange', 'Gnamba', 'Suisse', 'Genève'),
    ('marine.cerdelli@gmail.com', 'word', '2019-01-15 15:54:22', 'Marine', 'Cerdelli', 'Suisse', 'Genève'),
    ('youka.oulai@gmail.com', 'word', '2019-01-12 12:12:12', 'Youka', 'Oulaï', 'Côte d''Ivoire', 'Abidjan'),
    ('eulalia.botthelo@gmail.com', 'word', '2019-01-15 15:15:24', 'Eulalia', 'Botthelo', 'Suisse', 'Genève'),
    ('alessandro.damato@gmail.com', 'word', '2019-01-20 20:12:32', 'Alessandro', 'Damato', 'Japon', 'Tokyo'),
    ('odile.bouo@hotmail.com', 'word', '2019-01-15 15:15:15', 'Odile', 'Bouo', 'Suisse', 'Vaud'),
    ('youka.damato@gmail.com', 'word', '2019-01-10 01:10:01', 'Youka', 'Damato', 'Japon', 'Tokyo'),
    ('sabine.bouo@yahoo.fr', 'word', '2019-01-08 21:21:24', 'Sabine', 'Bouo', 'France', 'Paris'),
    ('marina.lou@gmail.com', 'word', '2019-01-08 05:21:24', 'Marina', 'Lou', 'France', 'Paris'),
    ('mohamad.mabarak@gmail.com', 'word', '2019-01-30 12:12:13', 'Mohamad', 'Mabarak', 'Suisse', 'Genève')
;

INSERT INTO Dog (nickName, birthday, picture, userId) VALUES 
    ('anjuide', '2019-01-08', 'anjuide.jpeg', '1'),
    ('mareine', '2019-01-08', 'mareine.jpeg', '2'),
    ('youyou', '2019-01-08', 'youyou.jpeg', '3'),
    ('lulu', '2019-01-08', 'lulu.jpeg', '4'),
    ('porci', '2019-01-08', 'porci.jpeg', '5'),
    ('didi', '2019-01-08', 'didi.jpeg', '6'),
    ('youyou', '2019-01-08', 'youyou.jpeg', '7'),
    ('abio', '2019-01-08', 'abio.jpeg', '8'),
    ('koue', '2019-01-08', 'koue.jpeg', '9'),
    ('momo', '2019-01-08', 'momo.jpeg', '10')
;

INSERT INTO DogRace (dogId, raceId) VALUES 
    ('1', '1'),
    ('2', '2'),
    ('3', '3'),
    ('4', '4'),
    ('5', '5'),
    ('6', '1'),
    ('7', '2'),
    ('8', '3'),
    ('9', '4'),
    ('10', '5')
;
INSERT INTO Article (title, picture, description, publicationDate, dogId) VALUES 
    ('ange', 'anjuide.jpeg', 'Ange a un chien qui s''appel anjuide', '2019-01-08 05:21:24', '1'),
    ('Marine', 'mareine.jpeg', 'Marine a un chien qui s''appel mareine', '2019-01-08 05:21:24', '2'),
    ('Youka', 'youyou.jpeg', 'Youka a un chien qui s''appel youyou', '2019-01-08 05:21:24', '3'),
    ('Eulalia', 'lulu.jpeg', 'Eulalia a un chien qui s''appel lulu', '2019-01-08 05:21:24', '4'),
    ('Alessandro', 'porci.jpeg', 'Alessandro a un chien qui s''appel porci', '2019-01-08 05:21:24', '5'),
    ('Odile', 'didi.jpeg', 'Odile a un chien qui s''appel didi', '2019-01-08 05:21:24', '6'),
    ('Youka', 'youyou.jpeg', 'Youka a un chien qui s''appel youyou', '2019-01-08 05:21:24', '7'),
    ('Sabine', 'abio.jpeg', 'Sabine a un chien qui s''appel abio', '2019-01-08 05:21:24', '8'),
    ('Marina', 'koue.jpeg', 'Marina a un chien qui s''appel koue', '2019-01-08 05:21:24', '9'),
    ('Mohamad', 'momo.jpeg', 'Mohamad a un chien qui s''appel momo', '2019-01-08 05:21:24', '10'),
    ('ange', 'anjuide.jpeg', 'Ange a un autre chien qui s''appel anjuide', '2019-01-08 05:21:24', '1'),
    ('Marine', 'mareine.jpeg', 'Marine a un autre chien qui s''appel mareine', '2019-01-08 05:21:24', '2'),
    ('Youka', 'youyou.jpeg', 'Youka a un autre chien qui s''appel youyou', '2019-01-08 05:21:24', '3'),
    ('Eulalia', 'lulu.jpeg', 'Eulalia a un autre chien qui s''appel lulu', '2019-01-08 05:21:24', '4'),
    ('Alessandro', 'porci.jpeg', 'Alessandro a un autre chien qui s''appel porci', '2019-01-08 05:21:24', '5')
;

INSERT INTO Comment (comment, publicationDate, articleId, userId) VALUES 
    ('joli', '2019-01-08 05:21:24', '1', '1'),
    ('beau', '2019-01-08 05:21:24', '2', '1'),
    ('pas mal', '2019-01-08 05:21:24', '3', '1'),
    ('Il vient d''où?','2019-01-08 05:21:24', '4', '1'),
    ('Joli', '2019-01-08 05:21:24', '5', '1'),
    ('Joli toutou', '2019-01-08 05:21:24', '6', '1'),
    ('Beau toutou', '2019-01-08 05:21:24', '7', '1'),
    ('Il te ressemble', '2019-01-08 05:21:24', '8', '1'),
    ('Il est pas beau', '2019-01-08 05:21:24', '9', '1'),
    ('Non', '2019-01-08 05:21:24', '10', '1'),
    ('Pk?', '2019-01-08 05:21:24', '1', '1'),
    ('J''admire', '2019-01-08 05:21:24', '2', '1'),
    ('Quoi?', '2019-01-08 05:21:24', '3', '1'),
    ('Allo!', '2019-01-08 05:21:24', '4', '1'),
    ('Magnifique', '2019-01-08 05:21:24', '5', '1')
;



