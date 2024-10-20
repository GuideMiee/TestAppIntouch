from itertools import product

# สร้างลูกเต๋าทั้งหมด
dice = range(1, 7)
outcomes = list(product(dice, repeat=2))

# คำนวณความน่าจะเป็นสำหรับแต่ละกรณี
total_outcomes = len(outcomes)

# 1. ผลรวมของแต้มเป็น 10
sum_10_count = sum(1 for x, y in outcomes if x + y == 10)
prob_sum_10 = sum_10_count / total_outcomes

# 2. ผลต่างของแต้มเป็น 2
diff_2_count = sum(1 for x, y in outcomes if abs(x - y) == 2)
prob_diff_2 = diff_2_count / total_outcomes

print(f"ความน่าจะเป็นของผลรวมเป็น 10: {prob_sum_10:.2f}")
print(f"ความน่าจะเป็นของผลต่างเป็น 2: {prob_diff_2:.2f}")
