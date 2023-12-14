total_lines = 8
time_doing = 4

SALARY_ONE_HOUR         = 20
PRICE_REVIEW_LEVEL_ONE  = 1
PRICE_REVIEW_LEVEL_TWO  = 2
PRICE_REVIEW_LEVEL_THREE= 5

review_fee = PRICE_REVIEW_LEVEL_THREE

if total_lines < 10:
    review_fee = PRICE_REVIEW_LEVEL_ONE
elif 10 <= total_lines <= 20:
    review_fee = PRICE_REVIEW_LEVEL_TWO

total_income = time_doing * SALARY_ONE_HOUR - review_fee

print(f"Salary: {total_income}$")