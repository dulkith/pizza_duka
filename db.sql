CREATE TABLE "sizes" (
"name"  VARCHAR(2) ,
"price" MONEY ,
PRIMARY KEY ("name")
);

CREATE TABLE "toppings" (
"name"  VARCHAR(10) ,
PRIMARY KEY ("name")
);

CREATE TABLE "pizzas" (
"id"  SERIAL ,
"size" VARCHAR(2) ,
"topping_1" VARCHAR(10) ,
"topping_2" VARCHAR(10) ,
PRIMARY KEY ("id")
);
