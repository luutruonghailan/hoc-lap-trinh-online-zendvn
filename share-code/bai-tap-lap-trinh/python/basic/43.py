score_one = int(input("Nhập điểm môn thứ nhất: "))
score_two = int(input("Nhập điểm môn thứ hai: "))
score_three = int(input("Nhập điểm môn thứ ba: "))

max_score = max(score_one, score_two, score_three)

average_score = (score_one + score_two + score_three) / 3

rounded_average_score = round(average_score, 1)

print(f"Max: {max_score}")
print(f"Avg: {rounded_average_score}")