import { step1, step2, step3, step4 } from '../src/app'

describe('arrayOperations', function () {

  describe('step1', function() {
    it('should multiply each element by 2', function() {
      expect(step1([1,2,3,4])).toEqual([2,4,6,8]);
    })
  });

  describe('step2', function() {
    it('should capitalize each other word', function() {
      expect(step2('hello world how ya doing?')).toEqual('hello WORLD how YA doing?');
    })
  });

  describe('step3', function() {
    it('should remove negative numbers', function() {
      expect(step3([-2,-1,0,1,2])).toEqual([0,1,2]);
    })
  });

  describe('step4', function() {
    it('should find the largest number in the array', function() {
      expect(step4([1,2,3,4])).toEqual(4);
    })
  });
});
