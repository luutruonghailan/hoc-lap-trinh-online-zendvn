#include <iostream>
using namespace std;
int main()
{
    int totalLine                        = 50;
    int timeDoing                        = 4;
    const int SALARY_ONE_HOUR            = 20;
    const int PRICE_REVIEW_LEVEL_ONE     = 1;
    const int PRICE_REVIEW_LEVEL_TWO     = 2;
    const int PRICE_REVIEW_LEVEL_THREE   = 5;
    int priceReview                      = PRICE_REVIEW_LEVEL_THREE;

    if (totalLine < 10)
    {
        priceReview = PRICE_REVIEW_LEVEL_ONE;
    }else if (totalLine >= 10 && totalLine < 20) // [10 , 20)
    {
        priceReview = PRICE_REVIEW_LEVEL_TWO;
    }

    // lương = thgian làm việc x lương trong 1 giờ - chi phí review;
    int salary = timeDoing * SALARY_ONE_HOUR - priceReview;
    cout << "Salary: " << salary;
}