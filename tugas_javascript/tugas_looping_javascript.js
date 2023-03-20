for (let i = 0; i < 5; i++) {
  console.log("Iterasi ke-" + i);
}

let a = 0;
while (a < 5) {
  console.log("Iterasi ke-" + a);
  a++;
}

let b = 0;
do {
  console.log("Iterasi ke-" + b);
  b++;
} while (i < 5);

const obj = { a: 1, b: 2, c: 3 };

for (const prop in obj) {
  console.log(`${prop}: ${obj[prop]}`);
}

const arr = [1, 2, 3];

for (const element of arr) {
  console.log(element);
}
