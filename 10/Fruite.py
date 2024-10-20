from math import comb

# จำนวนผลไม้แต่ละชนิด
oranges = 4
mangosteens = 2
mangoes = 1

# วิธีการเลือกผลไม้ 1 ลูกจากแต่ละชนิด
ways_to_choose_each = comb(oranges, 1) * comb(mangosteens, 1) * comb(mangoes, 1)

# จำนวนผลไม้รวม
total_fruits = oranges + mangosteens + mangoes

# วิธีการเลือกผลไม้ 3 ลูกจากทั้งหมด
total_ways_to_choose_3 = comb(total_fruits, 3)

# คำนวณความน่าจะเป็น
probability = ways_to_choose_each / total_ways_to_choose_3

print(f"ความน่าจะเป็นที่จะหยิบผลไม้ชนิดละ 1 ลูก: {probability:.2f}")
