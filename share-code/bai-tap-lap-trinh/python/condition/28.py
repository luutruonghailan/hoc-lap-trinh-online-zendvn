sales_amount = 400

BONUS_LEVEL_ONE     = 0.05
BONUS_LEVEL_TWO     = 0.1
BONUS_LEVEL_THREE   = 0.2

commission_rate = BONUS_LEVEL_THREE

if sales_amount <= 100:
    commission_rate = BONUS_LEVEL_ONE
elif sales_amount <= 300:
    commission_rate = BONUS_LEVEL_TWO

commission = sales_amount * commission_rate

print("Hoa hồng: {:g}".format(commission))