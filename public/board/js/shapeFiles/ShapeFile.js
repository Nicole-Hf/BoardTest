/**
 * ShapeFile.js
 * This file contains ShapeInfo Object
 */

let ShapeInfo = {
  Rectangle: {
    children: [
      {
        rect: {
          x: '10',
          y: '10',
          width: '80',
          height: '50'
        }
      }
    ]
  },
  Text: {
    children: [
      {
        rect: {
          x: '10',
          y: '10',
          width: '80',
          height: '50'
        }
      }
    ],
    stroke: 'none',
    fill: 'none'
  },
  RoundRectangle: {
    children: [
      {
        rect: {
          x: '10',
          y: '10',
          width: '80',
          height: '50',
          rx: '3',
          ry: '3'
        }
      }
    ]
  },
  Ellipse: {
    children: [
      {
        ellipse: {
          cx: '50',
          cy: '50',
          rx: '30',
          ry: '20'
        }
      }
    ]
  },
  Square: {
    children: [
      {
        rect: {
          x: '10',
          y: '10',
          width: '58.8',
          height: '58.8'
        }
      }
    ]
  },
  Circle: {
    children: [
      {
        ellipse: {
          cx: '50',
          cy: '50',
          rx: '30',
          ry: '30'
        }
      }
    ]
  },
  Diamond: {
    children: [
      {
        path: {
          d: 'M 15.98 1.36 L 29.58 14.96 L 15.98 28.56 L 2.38 14.96 Z'
        }
      }
    ],
    scale: '2 2'
  },
  Parallelogram: {
    children: [
      {
        path: {
          d: 'M 1.44 22.08 L 7.2 7.68 L 30.24 7.68 L 24.48 22.08 Z'
        }
      }
    ],
    scale: '2 2'
  },
  Hexagon: {
    children: [
      {
        path: {
          d:
            'M 8.64 5.28 L 23.04 5.28 L 30.24 14.88 L 23.04 24.48 L 8.64 24.48 L 1.44 14.88 Z'
        }
      }
    ],
    scale: '2 2'
  },
  Triangle: {
    children: [
      {
        path: {
          d: 'M 5.78 1.36 L 26.18 14.96 L 5.78 28.56 Z'
        }
      }
    ],
    scale: '2 2'
  },
  Cylinder: {
    children: [
      {
        path: {
          d:
            'M 5.78 6.8 C 5.78 -0.45 26.18 -0.45 26.18 6.8 L 26.18 23.12 C 26.18 30.37 5.78 30.37 5.78 23.12 Z'
        }
      },
      {
        path: {
          d: 'M 5.78 6.8 C 5.78 12.24 26.18 12.24 26.18 6.8'
        }
      }
    ],
    scale: '2 2'
  },
  Cloud: {
    children: [
      {
        path: {
          d:
            'M 8.64 10.08 C 2.88 10.08 1.44 14.88 6.05 15.84 C 1.44 17.95 6.62 22.56 10.37 20.64 C 12.96 24.48 21.6 24.48 24.48 20.64 C 30.24 20.64 30.24 16.8 26.64 14.88 C 30.24 11.04 24.48 7.2 19.44 9.12 C 15.84 6.24 10.08 6.24 8.64 10.08 Z'
        }
      }
    ],
    scale: '2 2'
  },
  Document: {
    children: [
      {
        path: {
          d:
            'M 1.44 5.28 L 30.24 5.28 L 30.24 21.6 Q 23.04 16.42 15.84 21.6 Q 8.64 26.78 1.44 21.6 L 1.44 8.16 Z'
        }
      }
    ],
    scale: '2 2'
  },
  Cube: {
    children: [
      {
        path: {
          d:
            'M 1.44 5.28 L 25.44 5.28 L 30.24 10.08 L 30.24 24.48 L 6.24 24.48 L 1.44 19.68 L 1.44 5.28 Z'
        }
      },
      {
        path: {
          d: 'M 1.44 5.28 L 25.44 5.28 L 30.24 10.08 L 6.24 10.08 Z'
        }
      },
      {
        path: {
          d: 'M 1.44 5.28 L 6.24 10.08 L 6.24 24.48 L 1.44 19.68 Z'
        }
      },
      {
        path: {
          d: 'M 6.24 24.48 L 6.24 10.08 L 1.44 5.28 M 6.24 10.08 L 30.24 10.08'
        }
      }
    ]
  },
  Step: {
    children: [
      {
        path: {
          d:
            'M 1.44 5.28 L 25.44 5.28 L 30.24 14.88 L 25.44 24.48 L 1.44 24.48 L 6.24 14.88 Z'
        }
      }
    ],
    scale: '2 2'
  },
  Trapezoid: {
    children: [
      {
        path: {
          d: 'M 1.44 22.08 L 7.2 7.68 L 24.48 7.68 L 30.24 22.08 Z'
        }
      }
    ],
    scale: '2 2'
  },
  Tape: {
    children: [
      {
        path: {
          d:
            'M 1.44 7.68 Q 8.64 16.32 15.84 7.68 Q 23.04 -0.96 30.24 7.68 L 30.24 22.08 Q 23.04 13.44 15.84 22.08 Q 8.64 30.72 1.44 22.08 L 1.44 7.68 Z'
        }
      }
    ],
    scale: '2 2'
  },
  'Annotation-1': {
    children: [
      {
        rect: {
          x: '9.18',
          y: '1.35',
          width: '13.5',
          height: '27',
          fill: 'none',
          stroke: 'none'
        }
      },
      {
        path: {
          d: 'M 22.68 1.35 L 9.18 1.35 L 9.18 28.35 L 22.68 28.35',
          fill: 'none'
        }
      }
    ],
    scale: '2 2'
  },
  'Annotation-2': {
    children: [
      {
        rect: {
          x: '9.18',
          y: '1.35',
          width: '13.5',
          height: '27',
          fill: 'none',
          stroke: 'none'
        }
      },
      {
        path: {
          d: 'M 22.68 1.35 L 15.93 1.35 L 15.93 28.35 L 22.68 28.35',
          fill: 'none'
        }
      },
      {
        path: {
          d: 'M 9.18 14.85 L 15.93 14.85',
          fill: 'none'
        }
      }
    ],
    scale: '2 2'
  },
  Card: {
    children: [
      {
        path: {
          d:
            'M 7.25 6.09 L 30.45 6.09 L 30.45 23.49 L 1.45 23.49 L 1.45 11.89 Z'
        }
      }
    ],
    scale: '2 2'
  },
  Collate: {
    children: [
      {
        path: {
          d:
            'M 28.2 1.35 C 28.7 1.36 29.1 1.52 29.27 1.8 C 29.43 2.07 29.35 2.42 29.04 2.73 L 2.82 26.97 C 2.51 27.28 2.43 27.63 2.59 27.9 C 2.76 28.18 3.16 28.34 3.66 28.35 L 28.2 28.35 C 28.7 28.34 29.1 28.18 29.27 27.9 C 29.43 27.63 29.35 27.28 29.04 26.97 L 2.82 2.73 C 2.51 2.42 2.43 2.07 2.59 1.8 C 2.76 1.52 3.16 1.36 3.66 1.35 L 28.2 1.35 Z'
        }
      }
    ]
  },
  Data: {
    children: [
      {
        path: {
          d:
            'M 12.61 23.49 L 3.19 23.49 Q 1.45 23.49 2.07 21.87 L 7.5 7.71 Q 8.12 6.09 9.86 6.09 L 28.71 6.09 Q 30.45 6.09 29.83 7.71 L 24.4 21.87 Q 23.78 23.49 22.04 23.49 Z'
        }
      }
    ],
    scale: '2 2'
  },
  Database: {
    children: [
      {
        path: {
          d:
            'M 2.25 23.85 L 2.25 5.85 C 2.25 3.36 8.29 1.35 15.75 1.35 C 23.21 1.35 29.25 3.36 29.25 5.85 L 29.25 23.85 C 29.25 26.34 23.21 28.35 15.75 28.35 C 8.29 28.35 2.25 26.34 2.25 23.85 Z'
        }
      },
      {
        path: {
          d:
            'M 2.25 5.85 C 2.25 8.34 8.29 10.35 15.75 10.35 C 23.21 10.35 29.25 8.34 29.25 5.85',
          fill: 'none'
        }
      }
    ],
    scale: '2 2'
  },
  Decision: {
    children: [
      {
        path: {
          d: 'M 15.93 1.35 L 29.43 14.85 L 15.93 28.35 L 2.43 14.85 Z'
        }
      }
    ],
    scale: '2 2'
  },
  Delay: {
    children: [
      {
        path: {
          d:
            'M 1.45 7.54 C 1.45 6.74 2.11 6.09 2.93 6.09 L 24.77 6.09 C 28.23 7.65 30.45 11.05 30.45 14.79 C 30.45 18.53 28.23 21.93 24.77 23.49 L 2.93 23.49 C 2.11 23.49 1.45 22.84 1.45 22.04 L 1.45 7.54 Z'
        }
      }
    ],
    scale: '2 2'
  },
  DirectData: {},
  Display: {
    children: [
      {
        path: {
          d:
            'M 1.45 14.79 C 3.84 10.41 8.03 7.24 12.96 6.09 L 24.77 6.09 C 28.23 7.65 30.45 11.05 30.45 14.79 C 30.45 18.53 28.23 21.93 24.77 23.49 L 12.96 23.49 C 8.03 22.34 3.84 19.17 1.45 14.79 Z'
        }
      }
    ],
    scale: '2 2'
  },
  Document: {
    children: [
      {
        path: {
          d:
            'M 29 6.09 C 29.8 6.09 30.45 6.74 30.45 7.54 L 30.45 21.31 Q 23.2 17.4 15.95 21.31 Q 8.7 25.23 1.45 21.31 L 1.45 8.26 L 1.45 7.54 C 1.45 6.74 2.1 6.09 2.9 6.09 Z'
        }
      }
    ],
    scale: '2 2'
  },
  Extract: {
    children: [
      {
        path: {
          d:
            'M 2.55 24 L 28.95 24 C 29.3 23.98 29.62 23.8 29.8 23.5 C 29.98 23.2 30 22.83 29.85 22.52 L 16.35 6.25 C 15.99 6 15.51 6 15.15 6.25 L 1.65 22.52 C 1.5 22.83 1.52 23.2 1.7 23.5 C 1.88 23.8 2.2 23.98 2.55 24 Z'
        }
      }
    ],
    scale: '2 2'
  },
  InternalStorage: {
    children: [
      {
        rect: {
          x: '2.66',
          y: '1.52',
          width: '26.6',
          height: '26.6',
          rx: '2.13',
          ry: '2.13'
        }
      },
      {
        path: {
          d: 'M 2.66 7.22 L 29.26 7.22'
        }
      },
      {
        path: {
          d: 'M 8.36 1.52 L 8.36 28.12'
        }
      }
    ],
    scale: '2 2'
  },
  LoopLimit: {
    children: [
      {
        path: {
          d:
            'M 7.07 6.09 L 24.83 6.09 L 30.45 11.89 L 30.45 22.04 C 30.45 22.84 29.79 23.49 28.97 23.49 L 2.93 23.49 C 2.11 23.49 1.45 22.84 1.45 22.04 L 1.45 11.89 L 7.07 6.09 Z'
        }
      }
    ],
    scale: '2 2'
  },
  ManualInput: {
    children: [
      {
        path: {
          d:
            'M 15.95 23.49 L 3.04 23.49 Q 1.45 23.49 1.45 21.89 L 1.45 15.22 Q 1.45 13.63 2.99 13.23 L 28.91 6.49 Q 30.45 6.09 30.45 7.68 L 30.45 21.89 Q 30.45 23.49 28.85 23.49 Z'
        }
      }
    ]
  },
  ManualOperation: {
    children: [
      {
        path: {
          d: 'M 1.45 23.49 L 8.12 6.09 L 23.78 6.09 L 30.45 23.49 Z'
        }
      }
    ]
  },
  Merge: {
    children: [
      {
        path: {
          d:
            'M 2.55 6 L 28.95 6 C 29.3 6.02 29.62 6.2 29.8 6.5 C 29.98 6.8 30 7.17 29.85 7.48 L 16.35 23.75 C 15.99 24 15.51 24 15.15 23.75 L 1.65 7.48 C 1.5 7.17 1.52 6.8 1.7 6.5 C 1.88 6.2 2.2 6.02 2.55 6 Z'
        }
      }
    ],
    scale: '2 2'
  },
  MultiDocument: {
    children: [
      {
        path: {
          d:
            'M 4.62 6.59 C 4.62 5.69 5.36 4.95 6.27 4.95 L 28.71 4.95 C 29.15 4.95 29.57 5.12 29.88 5.43 C 30.19 5.74 30.36 6.16 30.36 6.59 L 30.36 19.73 C 26.25 18 21.6 18 17.49 19.73 C 13.38 21.47 8.73 21.47 4.62 19.73 Z'
        }
      },
      {
        path: {
          d:
            'M 2.97 8.23 C 2.97 7.33 3.71 6.59 4.62 6.59 L 27.06 6.59 C 27.97 6.59 28.71 7.33 28.71 8.23 L 28.71 21.37 C 24.6 19.64 19.95 19.64 15.84 21.37 C 11.73 23.11 7.08 23.11 2.97 21.37 Z'
        }
      },
      {
        path: {
          d:
            'M 1.32 9.88 C 1.32 8.97 2.06 8.23 2.97 8.23 L 25.41 8.23 C 26.32 8.23 27.06 8.97 27.06 9.88 L 27.06 23.02 C 22.95 21.28 18.3 21.28 14.19 23.02 C 10.08 24.75 5.43 24.75 1.32 23.02 Z'
        }
      }
    ],
    scale: '2 2'
  },
  OffPageReference: {
    children: [
      {
        path: {
          d:
            'M 2.25 1.35 L 29.25 1.35 L 29.25 14.85 L 15.75 28.35 L 2.25 14.85 Z'
        }
      }
    ],
    scale: '2 2'
  },
  OnPageReference: {
    children: [
      {
        ellipse: {
          cx: '15.75',
          cy: '14.85',
          rx: '13.5',
          ry: '13.5'
        }
      }
    ],
    scale: '2 2'
  },
  OR: {
    children: [
      {
        ellipse: {
          cx: '15.99',
          cy: '14.82',
          rx: '13.65',
          ry: '13.65'
        }
      },
      {
        path: {
          d: 'M 2.34 14.82 L 29.64 14.82'
        }
      },
      {
        path: {
          d: 'M 15.99 1.17 L 15.99 28.47'
        }
      }
    ],
    scale: '2 2'
  },
  Tape: {
    children: [
      {
        path: {
          d:
            'M 1.45 7.3 Q 8.7 10.52 15.95 7.3 Q 23.2 4.08 30.45 7.3 L 30.45 22.57 Q 23.2 19.35 15.95 22.57 Q 8.7 25.79 1.45 22.57 L 1.45 7.3 Z'
        }
      }
    ]
  },
  ParallelMode: {
    children: [
      {
        rect: {
          x: '1.24',
          y: '8.68',
          width: '29.45',
          height: '12.4'
        }
      },
      {
        path: {
          d:
            'M 15.96 13.33 L 17.53 14.88 L 15.96 16.43 L 14.4 14.88 L 15.96 13.33 Z M 9.7 13.33 L 11.27 14.88 L 9.7 16.43 L 8.13 14.88 L 9.7 13.33 Z M 22.23 13.33 L 23.8 14.88 L 22.23 16.43 L 20.66 14.88 L 22.23 13.33 Z'
        }
      },
      {
        path: {
          d: 'M 1.24 8.68 L 30.69 8.68'
        }
      },
      {
        path: {
          d: 'M 1.24 21.08 L 30.69 21.08'
        }
      }
    ],
    scale: '2 2'
  },
  PredefinedProcess: {
    children: [
      {
        rect: {
          x: '1.45',
          y: '6.09',
          width: '29',
          height: '17.4',
          rx: '1.04',
          ry: '1.04'
        }
      },
      {
        path: {
          d: 'M 5.51 6.09 L 5.51 23.49 M 26.39 6.09 L 26.39 23.49'
        }
      }
    ],
    scale: '2 2'
  },
  Preparation: {
    children: [
      {
        path: {
          d:
            'M 9.28 6.09 L 22.62 6.09 L 30.45 14.79 L 22.62 23.49 L 9.28 23.49 L 1.45 14.79 Z'
        }
      }
    ],
    scale: '2 2'
  },
  Process: {
    children: [
      {
        rect: {
          x: '2.43',
          y: '1.35',
          width: '27',
          height: '27',
          rx: '1.89',
          ry: '1.89'
        }
      }
    ],
    scale: '2 2'
  },
  Sort: {
    children: [
      {
        path: {
          d:
            'M 16.48 1.63 L 29.15 14.3 C 29.33 14.43 29.43 14.63 29.43 14.85 C 29.43 15.07 29.33 15.27 29.15 15.4 L 16.48 28.07 C 16.35 28.25 16.15 28.35 15.93 28.35 C 15.71 28.35 15.51 28.25 15.38 28.07 L 2.71 15.4 C 2.53 15.27 2.43 15.07 2.43 14.85 C 2.43 14.63 2.53 14.43 2.71 14.3 L 15.38 1.63 C 15.51 1.45 15.71 1.35 15.93 1.35 C 16.15 1.35 16.35 1.45 16.48 1.63 Z'
        }
      },
      {
        path: {
          d: 'M 2.43 14.85 L 29.43 14.85'
        }
      }
    ],
    scale: '2 2'
  },
  'Start-1': {
    children: [
      {
        ellipse: {
          cx: '15.95',
          cy: '14.79',
          rx: '14.499999999999998',
          ry: '8.7'
        }
      }
    ],
    scale: '2 2'
  },
  'Start-2': {
    children: [
      {
        ellipse: {
          cx: '15.93',
          cy: '14.85',
          rx: '13.5',
          ry: '13.5'
        }
      }
    ],
    scale: '2 2'
  },
  StoredData: {
    children: [
      {
        path: {
          d:
            'M 4.45 6.09 L 30.3 6.09 C 30.45 6.26 30.45 6.5 30.3 6.67 C 29.14 7.96 28.37 11.19 28.37 14.79 C 28.37 18.39 29.14 21.62 30.3 22.91 C 30.45 23.08 30.45 23.32 30.3 23.49 L 4.45 23.49 C 2.8 23.49 1.45 19.59 1.45 14.79 C 1.45 9.99 2.8 6.09 4.45 6.09 Z'
        }
      }
    ]
  },
  SummingJunction: {
    children: [
      {
        ellipse: {
          cx: '15.99',
          cy: '14.82',
          rx: '13.65',
          ry: '13.65'
        }
      },
      {
        path: {
          d: 'M 6.24 24.57 L 25.74 5.07'
        }
      },
      {
        path: {
          d: 'M 6.24 5.07 L 25.74 24.57'
        }
      }
    ],
    scale: '2 2'
  },
  Terminator: {
    children: [
      {
        path: {
          d: 'M 6.24 5.07 L 25.74 24.57'
        }
      }
    ],
    scale: '2 2'
  },
  Transfer: {
    children: [
      {
        path: {
          d:
            'M 1.45 10.73 L 18.85 10.73 L 18.85 4.64 L 30.45 14.79 L 18.85 24.94 L 18.85 18.85 L 1.45 18.85 L 1.45 14.79 Z'
        }
      }
    ],
    scale: '2 2'
  }
};

//
