#include <iostream>
using namespace std;
#include <string>

int main()
{
     int yourNumber = 123;
		int maxNumber = yourNumber % 10;
		yourNumber = yourNumber / 10; 
		bool isIncrement = true;
		string result = "Yes";
		
		while (yourNumber != 0) {
			int lastNumber = yourNumber % 10; // 8 1 2
			if(maxNumber <= lastNumber) {
				isIncrement = false;
				break;
			}
			yourNumber = yourNumber / 10; // 21 2 0 
		}
		if (isIncrement == false) {
			result = "No";
		}
    cout << result << endl;

}	


