# -*- coding: utf-8 -*-
"""
Created on Tue Jul 17 09:36:32 2018
This program tests the method to read csv files and
tests if the data in the list or rows matches the input file
and the expected output.

@author: ckhan3
"""

import unittest
from parse_csv import read_data


class ParseCSVTest(unittest.TestCase):

    def setUp(self):
        self.data = r'C:\test_data.csv'

    def test_csv_read_data_headers(self):
        self.assertEqual(
            read_data(self.data)[0],
            ['Time', 'Usage', 'Label']
            )

    def test_csv_read_data_team_name(self):
        self.assertEqual(read_data(self.data)[1][0], '0')

    def test_csv_read_data_points(self):
        self.assertEqual(read_data(self.data)[1][2], 'average')


if __name__ == '__main__':
    unittest.main()