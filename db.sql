
CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `category` enum('PIZZA','PASTA','SIDES','DESSERTS','BEVERAGES') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'PIZZA' COMMENT 'PIZZA | PASTA | SIDES | DESSERTS | BEVERAGES',
  `image` varchar(100) NOT NULL,
  `can_customise` tinyint(1) NOT NULL DEFAULT 0,
  `is_new` tinyint(1) NOT NULL DEFAULT 0,
  `price` decimal(8,2) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `active` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `sizes` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
 `price_percentage` decimal(8,2) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `toppings` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `slug` varchar(50) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `customers` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 `mobile` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
 `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `orders` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `customer_id` int(11) NOT NULL,
 `item_count` int(11) NOT NULL,
 `sub_total` decimal(8,2) NOT NULL,
 `deliver_charge` decimal(8,2) NOT NULL,
 `total` decimal(8,2) NOT NULL,
 `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 PRIMARY KEY (`id`),
 KEY `customer_id` (`customer_id`),
 CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `order_details` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `order_id` int(11) NOT NULL,
 `product_id` int(11) NOT NULL,
 `title` varchar(255) NOT NULL,
 `image` varchar(100) NOT NULL,
 `cart_description` varchar(255) NOT NULL,
 `quantity` int(5) NOT NULL,
 `price` decimal(8,2) NOT NULL,
 `total` decimal(8,2) NOT NULL,
 PRIMARY KEY (`id`),
 KEY `order_id` (`order_id`),
 CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `ci_sessions` (
    `id` varchar(40) NOT NULL,
    `ip_address` varchar(45) NOT NULL,
    `timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
    `data` blob NOT NULL,
    PRIMARY KEY (id),
    KEY `ci_sessions_timestamp` (`timestamp`)
);


INSERT INTO `sizes` (`id`, `title`, `price_percentage`) VALUES
(1, 'Regular', '0.00'),
(2, 'Medium', '25.00'),
(3, 'Large', '50.00');

INSERT INTO `toppings` (`id`, `title`, `slug`, `icon`, `image`, `price`) VALUES
(1, 'Bbq Chicken', 'toppingsBbqChicken', 'toppingsBarbeque.jpg', 'customise-pizza-barbeque.png', '200.00'),
(2, 'Devils Chicken', 'toppingsDevilsChicken', 'toppingsSpicyChicken.jpg', 'customise-pizza-spicy.png', '200.00'),
(3, 'Mutton Keema', 'toppingsMuttonKeema', 'toppingsMuttonKeemas.jpg', 'customise-mutton-keemas.png', '200.00'),
(4, 'Black Olives', 'toppingsBlackOlives', 'toppingsOlives.jpg', 'customise-pizza-greenOlives.png', '100.00'),
(5, 'Crisp Capsicum', 'toppingsCrispCapsicum', 'toppingsCapsicum.jpg', 'customise-pizza-capsicum.png', '100.00'),
(6, 'Mushroom', 'toppingsMushroom', 'toppingsMushroom.jpg', 'customise-pizza-mushroom.png', '100.00'),
(7, 'Golden Corn', 'toppingsGoldenCorn', 'toppingsGoldenCorn.jpg', 'customise-pizza-goldenCorn.png', '100.00'),
(8, 'Fresh Tomato', 'toppingsFreshTomato', 'toppingsTomato.jpg', 'customise-pizza-tomato.png', '100.00'),
(9, 'Jalapeno', 'toppingsJalapeno', 'toppingsJalapeno.jpg', 'customise-pizza-jalapeno.png', '100.00'),
(10, 'Tandoori Chicken', 'toppingsTandooriChickens', 'toppingsTandooriChicken.jpg', 'customise-tandoori-chicken.png', '200.00'),
(11, 'Paprika', 'toppingsPaprika', 'toppingsPaprika.jpg', 'customise-pizza-paprika.png', '100.00'),
(12, 'Chicken Sausage', 'toppingsChickenSausage', 'toppingsChickenSausage.jpg', 'customise-chicken-sausage.png', '150.00'),
(13, 'Bell Pepper', 'toppingsBellPepper', 'toppingsBellPepper.jpg', 'customise-pizza-bell-pepper.png', '100.00'),
(14, 'Onion', 'toppingsOnions', 'toppingsOnion.jpg', 'customise-pizza-onion.png', '100.00');

INSERT INTO `items` (`id`, `title`, `description`, `category`, `image`, `can_customise`, `is_new`, `price`, `created_on`, `active`) VALUES
-- PIZZA ITEMS
(1, 'SIMPLY CHEESE RANGE', 'Mozzarella cheese I spicy oregano I chili flakes I pepper and olives', 'PIZZA', 'margherita.jpg', 1, 1, '600.00', '2020-11-01 04:15:23', 1),
(2, 'MEATILICIOUS', 'Texas BBQ chicken I tandoori chicken I chicken sausage chunks I mutton and onions', 'PIZZA', 'meatzaa.png.jpg', 1, 0, '970.00', '2020-11-01 04:15:23', 1),
(3, 'MIGHTY MEATY', 'Texas BBQ chicken I mutton I sausage chunks I tandoori chicken I onion I bell peppers I mushrooms and olives', 'PIZZA', 'Non-Veg_Extravaganza.png.jpg', 1, 0, '800.00', '2020-11-01 04:15:23', 1),
(4, 'SEAFOOD HAWAIIAN', 'Hot I Spicy seafood I pineapple titbits I onion on a mozzarella crust', 'PIZZA', 'SeaFoodHawaiian1.jpg', 0, 0, '800.00', '2020-11-01 04:15:23', 1),
(5, 'SRI LANKAN MEATY', 'A meaty pizza made of BBQ remedy chicken I hot wave chicken I mutton keema I cheese I and a variety of Sri Lankan spices', 'PIZZA', 'sri_lankan_meaty.jpg', 0, 1, '750.00', '2020-11-01 04:15:23', 1),
(6, 'GARDEN FRESH DELIGHT', 'Onions I bell peppers I mushrooms I jalapenos I golden corn and olives- the ultimate treat to all veggie lovers', 'PIZZA', 'vegextra.png.jpg', 0, 1, '700.00', '2020-11-01 04:15:23', 1),
(7, 'CHICKEN HAWAIIAN', 'Crispy chicken bacon I jalapeno and pineapple titbits on a mozzarella crust', 'PIZZA', 'Hawaiian_Delight.png.jpg', 0, 1, '800.00', '2020-11-01 04:15:23', 1),
(8, 'TANDOORI CHICKEN', 'Tandoori oven baked shredded chicken breasts I onions and capsicum', 'PIZZA', 'Tandoori_Chicken.png.jpeg', 0, 1, '850.00', '2020-11-01 04:15:23', 1),
(9, 'HOT CHILI CHICKEN', 'Quick fried hot chili chicken I capsicum I onion I red paprika slices and devil sauce', 'PIZZA', 'Devil_Chicken.png.jpg', 0, 0, '600.00', '2020-11-01 04:15:23', 1),
(10, 'TERIYAKI CHICKEN', 'Japanese teriyaki glazed chicken I button mushrooms I onions and crispy bell peppers', 'PIZZA', 'ChikenTeriyaki1.jpg', 0, 0, '800.00', '2020-11-01 04:15:23', 1),
(11, 'SRI LANKAN SPICY VEG', 'Red paprika I onions I bell peppers and a variety of Sri Lankan spices blend with a spicy hot chili sauce', 'PIZZA', 'Sri_Lankan_Spicy_Veg.jpg', 0, 0, '800.00', '2020-11-01 04:15:23', 1),
(12, 'BBQ REMEDY', 'Texas BBQ chicken  tandoori chicken I onion I bell peppers and chili mayo', 'PIZZA', 'BBQ-Chiken.png.jpeg', 0, 0, '900.00', '2020-11-01 04:15:23', 1),
-- PASTA
(13, 'Spaghetti Agliolio Rosse', 'Spaghetti tossed with garlic, olive oil, chillies, parsley and diced fresh tomatoes.', 'PASTA', 'Spaghetti_Agliolio_E_Peperonico_rosse.jpg', 0, 1, '400.00', '2020-11-01 04:15:23', 1),
(14, 'Spaghetti Bolognese', 'Spaghetti cooked in a tomato base with minced Beef and an assortment of herbs.', 'PASTA', 'Spaghetti_Bolognese.jpg', 0, 1, '600.00', '2020-11-01 04:15:23', 1),
(15, 'Spaghetti Carbonara', 'Spaghetti cooked in a creamy egg yolk with chopped bacon, parmesan cheese & parsley.', 'PASTA', 'Spaghetti_Carbonara.jpg', 0, 1, '500.00', '2020-11-01 04:15:23', 1),
(16, 'Penne Alla arrabbiata', 'Penne pasta tossed with tomato, garlic, chilli and basil. Ideal vegetarian pasta for those who lieka little spice in the .....', 'PASTA', 'Penne_ Alla_arrabbiata.jpg', 0, 0, '800.00', '2020-11-01 04:15:23', 1),
(17, 'Penne Con Formaggi', 'Short Penne Pasta in a white cream cheese Sauce. Ideal vegetarian Pasta for those who are looking for Cream based pasta.', 'PASTA', 'Penne_Con_Formaggi.jpg', 0, 0, '550.00', '2020-11-01 04:15:23', 1),
(18, 'Fussili Con Papaliana', 'Fussili Pasta tossed with Ham, Mushroom, Parmesan & cream cheese sauce.', 'PASTA', 'Fussili_Con_Papaliana.jpg', 0, 0, '420.00', '2020-11-01 04:15:23', 1),
-- SIDES
(19, 'Garlic Bread', 'Our own unique twist on Garlic Bread. A must try dish which complements any main you order.', 'SIDES', 'Garlic_Bread.jpg', 0, 1, '500.00', '2020-11-01 04:15:23', 1),
(20, 'Focaccia with Tomato', 'Focaccia Bread Seasoned with Garlic, Basil, Tomato & Olive Oil, Ideal Starter to seson your taste buds.', 'SIDES', 'Focaccia_with_Tomato.jpg', 0, 1, '400.00', '2020-11-01 04:15:23', 1),
(21, 'Mustard Chicken Salad', 'A Fresh Garden Salad with Mixed greens, Sliced Chicken breasts, Tomato & our special mustard mayonaise sauce.', 'SIDES', 'Mustard_Chicken_Salad.jpg', 0, 1, '400.00', '2020-11-01 04:15:23', 1),
(22, 'Crispy Chicken Wings', 'Marinated Chicken Wings served with a Spicy tomato sauce or Mustard Mayonaise.', 'SIDES', 'Crispy_Chicken.jpg', 0, 0, '600.00', '2020-11-01 04:15:23', 1),
(23, 'Spiced Meat Riblets', 'Succulent Pork ribs glazed with a Spicy homemade sauce. A Crowd pleaser!', 'SIDES', 'Spiced_Meat_Riblets.jpg', 0, 0, '800.00', '2020-11-01 04:15:23', 1),
-- DESSERTS
(24, 'Berry Fruit Salad', 'The Ultimate Dessert for all our Pizza Fans. Berry fruit salad', 'DESSERTS', 'berry-fruit-salad.jpg', 0, 0, '900.00', '2020-11-01 04:15:23', 1),
(25, 'Chocolate Ice-Cream', 'The Ultimate Dessert for all our Pizza Fans. Chocolate ice cream', 'DESSERTS', 'Chocolate-Ice-Cream.jpg', 0, 0, '400.00', '2020-11-01 04:15:23', 1),
(26, 'Vania Ice-Cream', 'The Ultimate Dessert for all our Pizza Fans. Vanila ice cream', 'DESSERTS', 'vanilla-bean-ice-cream.jpg', 0, 0, '350.00', '2020-11-01 04:15:23', 1),
-- BEVERAGES

(27, 'COKE 500ML', 'The Ultimate Beverages for all our Pizza Fans. Coca-Cola 500ML bottle', 'BEVERAGES', 'coke.jpg', 0, 0, '200.00', '2020-11-01 04:15:23', 1),
(28, 'PEPSI 500ML', 'The Ultimate Bevarages for all our Pizza Fans. Pepci 500ML bottle', 'BEVERAGES', 'pepsi.jpg', 0, 0, '200.00', '2020-11-01 04:15:23', 1),
(29, 'BOTTLED WATER', 'The Ultimate Bevarages for all our Pizza Fans. Bottle water', 'BEVERAGES', 'aquafina.jpg', 0, 0, '50.00', '2020-11-01 04:15:23', 1);
