grocery_prices = {
    "onions":78.0,
    "peas":20,
    "palak":15,
    "carrot":30
}

grocery_qty = {
    "onions":3,
    "peas":2,
    "palak":5,
    "carrot":3
}

bill=0
for i in grocery_prices.keys():
    bill += grocery_prices[i] * grocery_qty[i]

print("Total bill: Rs.", bill)