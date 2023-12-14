#include <iostream>
using namespace std;
#include <string>

int main()
{
    int result = 0;
    const int SALARY_ONE_HOUR = 20;
    const int PRICE_REVIEW_LEVEL_ONE = 1;
    const int PRICE_REVIEW_LEVEL_TWO = 2;
    const int PRICE_REVIEW_LEVEL_THREE = 5;
    int priceReview = 0;

    int totalLine = 10;
    int timeDoing = 3;

    if(totalLine < 10){
        priceReview = PRICE_REVIEW_LEVEL_ONE;
    }else if(totalLine >= 10 && totalLine < 20){
        priceReview = PRICE_REVIEW_LEVEL_TWO;
    }else if(totalLine >= 20){
        priceReview = PRICE_REVIEW_LEVEL_THREE;
    }

result = timeDoing * SALARY_ONE_HOUR - priceReview;
cout << "Salary: " << result << "$";
}