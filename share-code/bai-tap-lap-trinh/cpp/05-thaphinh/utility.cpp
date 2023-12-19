#include <iostream>
#include "utility.h"

using namespace std;

string myRepeat(string character, int length)
{
  string record = "";
  for (int i = 1; i <= length; i++)
  {
    record += character;
  }
  return record;
}