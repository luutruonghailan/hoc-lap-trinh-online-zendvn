#include <iostream>
using namespace std;
#include <string>

int main()
{
   int totalSales = 90; 
    const double BONUS_LEVEL_ONE = 0.05;
    const double BONUS_LEVEL_TWO = 0.1;
    const double BONUS_LEVEL_THREE = 0.2;
    double incentive = BONUS_LEVEL_THREE;
    if (totalSales <= 100) {
        incentive = BONUS_LEVEL_ONE;
    } else if (totalSales <= 300) {
        incentive =  BONUS_LEVEL_TWO;
    } 
    double commission = totalSales * incentive;
    cout <<"Hoa hồng: " << commission;

}
