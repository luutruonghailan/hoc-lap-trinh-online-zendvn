#include <iostream>
using namespace std;
int main()
{
    // 5% nếu tổng doanh số nhỏ hơn hoặc bằng 100$.
    // 10% nếu tổng doanh số nhỏ hơn hoặc bằng 300$
    // 20% nếu tổng doanh số là lớn hơn 300$

    double totalSale                        = 90;
    const double BONUS_LEVEL_ONE            = 0.05;
    const double BONUS_LEVEL_TWO            = 0.1;
    const double BONUS_LEVEL_THREE          = 0.2;
    double incentive                        = BONUS_LEVEL_THREE;

    if (totalSale <= 100)
    {
        incentive = BONUS_LEVEL_ONE;
    }else if (totalSale <= 300) 
    {
        incentive = BONUS_LEVEL_TWO;
    }

    double salary = totalSale * incentive;
    cout << "Hoa hồng: " << salary;
}