var fruits = ["apple", "banana", "kiwi", "nectarine", "anenes"];

for (let i = 0; i < fruits.length; i++) {
  fruits[i] = fruits[i] + fruits[i + 1];
}

if (fruits[0] == "applebanana") {
  console.log("yeah applebanana");
} else {
  console.log("awh geen applebanana:(!");
}
