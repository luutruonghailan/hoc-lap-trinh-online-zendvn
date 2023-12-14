#include <iostream>
using namespace std;
#include <string>

int main()
{
    int yourNumber = 12;
    int sum = 0;
    int count = 0;

    while (yourNumber > 0)
    {
        int lastNumber = yourNumber % 10;
        sum += lastNumber;
        yourNumber = yourNumber / 10;
        count++;
    }

    cout << "sum: " << sum << endl;
    cout << "count: " << count << endl;
}