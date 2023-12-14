#include <iostream>
using namespace std;
#include <iomanip>
int main()
{
    int scoreOne    = 6;
    int scoreTwo    = 9;
    int scoreThree  = 5;

    int maxOneTwo   = max(scoreOne,scoreTwo);
    int maxNumber   = max(maxOneTwo, scoreThree);
    double avg      = (double) (scoreOne + scoreTwo + scoreThree) / 3;

    cout << "avg: " << setprecision(2) << avg << endl;
    cout << "Max: " << maxNumber << endl;
}